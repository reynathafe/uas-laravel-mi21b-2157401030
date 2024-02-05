@extends('app')

@section('content')
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-4">
            <div class="card" style="background-color: #8FC8EB;">
                <div class="card-body">
                    @if (session('success'))
                        <p class="alert alert-success">{{ session('success') }}</p>
                    @endif
                    @if ($errors->any())
                        @foreach ($errors->all() as $err)
                            <p class="alert alert-danger">{{ $err }}</p>
                        @endforeach
                    @endif
                    <h5 class="card-title text-left" style="font-weight: bold;">Pendaftaran</h5>
                    <form id="registerForm" method="POST" action="{{ route('register.action') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input id="name" type="text" class="form-control" name="name"
                                value="{{ old('name') }}" required autofocus placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email"
                                value="{{ old('email') }}" required placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required
                                placeholder="Password">
                        </div>
                        <div class="mb-3 text-center" style="margin-top: 20px;">
                            <button class="btn btn-primary">Daftar</button>
                            <a class="btn btn-danger" href="{{ route('dashboard') }}">Kembali</a>
                        </div>

                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
