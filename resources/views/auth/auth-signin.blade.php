@extends('layouts.auth-layout')
@section('title')
    Sign In
@endsection
@section('content')
    <div class="auth-bg">
        <span class="r"></span>
        <span class="r s"></span>
        <span class="r s"></span>
        <span class="r"></span>
    </div>
    @if (session('status'))
        <div>
            {{ $status }}
        </div>
    @endif

    @if ($errors->any())
        <div style="display: none" id="error-stats">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif
    <div class="card">
        <div class="card-body text-center">
            <div class="mb-4">
                <i class="feather icon-unlock auth-icon"></i>
            </div>
            <h3 class="mb-4">Login</h3>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                </div>
                <div class="input-group mb-4">
                    <input type="password" class="form-control" placeholder="password" name="password" required
                        autocomplete="current-password">
                </div>

                <div class="form-group text-left">
                    <div class="checkbox checkbox-fill d-inline">
                        <input type="checkbox" name="remember" id="remember_me" checked="">
                        <label for="remember_me" class="cr">Remember Me</label>
                    </div>
                </div>
                <button class="btn btn-primary shadow-2 mb-4">Login</button>
                {{-- <p class="mb-2 text-muted">Forgot password? <a href="#">Reset</a></p> --}}
                <p class="mb-0 text-muted">Don’t have an account? <a href="{{ route('register') }}">Signup</a></p>
                <p class="mb-0 text-muted">Forgot your password? <a href="{{ route('reset') }}">Reset</a></p>
        </div>
    </div>
    </form>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        let data = document.getElementById('error-stats');
        if (!!data) {
            displayMsg(data);
        }

        function displayMsg(message) {
            // alert(message.innerHTML);
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: message.innerHTML,
                // text: 'Something went wrong!',
                // footer: '<a href="">Why do I have this issue?</a>'
            });
        }
    </script>
@endsection
