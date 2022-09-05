@extends('Home.layout')
@section('content')
    <div class="container" style="margin-top: 100px">
        <p class="fs-5">Data Project / <span class="fw-bold">Detail Project</span></p>
    </div>
    <div class="fs-6 bg-light bg-opacity-100 p-5 rounded-3">
        <h2>{{ $show->nama_project }}</h3>
            <hr>
            <div class="row mb-2 fs-5">
                <div class="col-2 fw-bold">
                    Keterangan
                </div>
                <div class="col">
                    {{ $show->keterangan }}
                </div>
            </div>
            <div class="row fs-5">
                <div class="col-2 fw-bold">
                    Status
                </div>
                <div class="col">
                    @if ($show->status == 1)
                        <span class="badge text-bg-warning bg-opacity-100">Pending</span>
                    @elseif ($show->status == 2)
                        <span class="badge text-bg-info bg-opacity-100">On Work</span>
                    @else
                        <span class="badge text-bg-success bg-opacity-100">Done</span>
                    @endif
                </div>
            </div>
    </div>
@endsection
