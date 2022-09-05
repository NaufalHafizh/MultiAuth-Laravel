@extends('Home.layout')
@section('content')
    <div class="container" style="margin-top: 100px">
        <p class="fs-5">Data Project / <span class="fw-bold">Tambah Project</span></p>
    </div>
    <div class="fs-6 bg-light bg-opacity-100 p-5 rounded-3">
        <form action="/home" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Project</label>
                <input type="text" class="form-control @error('nama_project') is-invalid @enderror"
                    value="{{ old('nama_project') }}" name="nama_project" aria-describedby="emailHelp">
                @error('nama_project')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                <textarea class="form-control  @error('keterangan') is-invalid @enderror" name="keterangan" rows="3">{{ old('keterangan') }}</textarea>
            </div>
            @error('keterangan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection