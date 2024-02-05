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
                    <h5 class="card-title text-left" style="font-weight: bold;">Login</h5>
                    <form action="{{ route('login.action') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Email <span class="text-danger">*</span></label>
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}" required
                                autofocus placeholder="Email" />
                        </div>
                        <div class="mb-3">
                            <label>Password <span class="text-danger">*</span></label>
                            <input class="form-control" type="password" name="password" required placeholder="Password" />
                        </div>
                        <div class="mb-3 text-center">
                            <button class="btn btn-primary">Login</button>
                            <a class="btn btn-danger" href="{{ route('dashboard') }}">Kembali</a>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
