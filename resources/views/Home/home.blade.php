@extends('Home.layout')
@section('content')
    <div class="fs-6 bg-light bg-opacity-100 p-5 border-4" style="margin-top: 100px">
        <div>
            <h2>Selamat Datang, {{ auth()->user()->name }}</h2>
            <hr>
        </div>
        <div class="mb-4">
            <button class="btn btn-primary"><a class="text-white text-decoration-none" href="/home/create">Tambah
                    Data</a></button>
        </div>
        @if (session()->has('failed'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('failed') }}
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
                    @if (Auth::User()->role == 1 || Auth::User()->role == 2)
                        <th scope="col text-center">aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($project as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->nama_project }}</td>
                        <td>{{ $p->keterangan }}</td>
                        <td>
                            @if ($p->status == 1)
                                <span class="badge text-bg-warning bg-opacity-100">Pending</span>
                            @elseif ($p->status == 2)
                                <span class="badge text-bg-info bg-opacity-100">On Work</span>
                            @else
                                <span class="badge text-bg-success bg-opacity-100">Done</span>
                            @endif
                        </td>
                        @if (Auth::User()->role == 1 || Auth::User()->role == 2)
                            <td>
                                <span class="badge text-bg-primary bg-opacity-100">Edit</span>
                                <span class="badge text-bg-danger bg-opacity-100">Hapus</span>
                            </td>
                        @endif

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
