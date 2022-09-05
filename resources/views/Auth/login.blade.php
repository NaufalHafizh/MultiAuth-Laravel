@extends('Auth.layout')
@section('content')
    <div class="login" style="margin-top: 100px">
        <div class="card mx-auto shadow-sm" style="width: 24rem">
            <div class="card-body m-3">
                @if (session()->has('failed'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session('failed') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="mb-4 text-center">
                    <h2 class="fw-bold text-uppercase">Login</h2>
                    <hr>
                </div>
                <form action="/login" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            id="password" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-grid gap-2 mt-4">
                        <button class="btn btn-md btn-primary" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
