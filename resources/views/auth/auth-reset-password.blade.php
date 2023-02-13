@extends('layouts.auth-layout')
@section('title')
    Reset Password
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
                <i class="feather icon-mail auth-icon"></i>
            </div>
            <h3 class="mb-4">Reset Password</h3>
            <form action="{{route('reset-action')}}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <button class="btn btn-primary mb-4 shadow-2">Reset Password</button>
        </form>
            <p class="mb-0 text-muted">Don’t have an account? <a href="{{route('register')}}">Signup</a></p>
        </div>
    </div>
@endsection
