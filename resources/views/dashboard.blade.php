@extends('app')

@section('content')
<div class="row justify-content-center align-items-center" style="height: 100vh; background-color: #8FC8EB; color: #19335A;">
    <div class="col-md-6 text-center">
        <h1 style="font-weight: bold; font-family: 'Arial', sans-serif;">Selamat Datang</h1>
        {{-- <div class="btn-group" role="group" aria-label="Actions"> --}}
            <a href="{{ route('register') }}" class="btn btn-primary">Daftar</a>
            <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
        </div>
    </div>
</div>
@endsection
