@extends('app')

@section('content')
<div class="container-fluid" style="background-color: #8FC8EB; color: #19335A;">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-6 text-center">
            @auth
                <h3 style="font-family: Arial; font-weight: bold; color: #19335A;">{{ Auth::user()->name }}</h3>
                <h3 style="font-family: Arial; font-weight: bold; color: #19335A;">{{ Auth::user()->email }}</h3>
                <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
            @endauth
        </div>
    </div>
</div>
@endsection
