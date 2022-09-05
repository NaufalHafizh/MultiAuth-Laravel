@extends('Home.layout')
@section('content')
    <div class="fs-6 bg-light bg-opacity-100 p-5 rounded-3" style="margin-top: 100px">
        <div class="mb-4">
            <h2>Selamat Datang, {{ auth()->user()->name }}</h2>
            <hr>
        </div>
        @if (Auth::User()->role == 1 || Auth::User()->role == 2)
            <div class="mb-4">
                <button class="btn btn-primary"><a class="text-white text-decoration-none" href="/home/create">Tambah
                        Data</a></button>
            </div>
        @endif
        @if (session()->has('failed'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('finish'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('finish') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <table class="table table-light border-2">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Project</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($project as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->nama_project }}</td>
                        <td>{{ Str::limit($p->keterangan, 50, '...') }}</td>
                        <td>
                            @if ($p->status == 1)
                                <span class="badge text-bg-warning bg-opacity-100">Pending</span>
                            @elseif ($p->status == 2)
                                <span class="badge text-bg-info bg-opacity-100">On Work</span>
                            @else
                                <span class="badge text-bg-success bg-opacity-100">Done</span>
                            @endif
                        </td>
                        <td>
                            <a href="/home/{{ $p->id }}"
                                class="badge text-bg-info bg-opacity-100 text-decoration-none">Detail</a>
                            @if (Auth::User()->role == 1 || Auth::User()->role == 2)
                                <a href="/home/{{ $p->id }}/edit"
                                    class="badge text-bg-warning bg-opacity-100 text-decoration-none">Edit</a>
                                <form class="d-inline" method="POST" action="/home/{{ $p->id }}">
                                    @method('delete')
                                    @csrf
                                    <button class="badge text-bg-danger bg-opacity-100 text-decoration-none border-0"
                                        onclick="return confirm('Are You Sure ?')">Delete</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
