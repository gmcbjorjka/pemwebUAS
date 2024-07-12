@extends('layouts.app')

@section('content')
<div class="login-right">
  <div class="login-right-wrap">
    <h1>Reset Password</h1>
    <p class="account-subtitle">Enter your email address, reset token, and new password</p>
    <form action="{{ route('password.update') }}" method="POST">
      @csrf
      <input type="hidden" name="token" value="{{ $token }}">
      <div class="form-group">
        <label>Email<span class="login-danger">*</span></label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autofocus>
        <span class="profile-views"><i class="fas fa-envelope"></i></span>
        @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="form-group">
        <label>Password<span class="login-danger">*</span></label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
        <span class="profile-views"><i class="fas fa-lock"></i></span>
        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="form-group">
        <label>Confirm Password<span class="login-danger">*</span></label>
        <input type="password" class="form-control" name="password_confirmation" required>
        <span class="profile-views"><i class="fas fa-lock"></i></span>
      </div>
      <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
      </div>
    </form>
  </div>
</div>
@endsection