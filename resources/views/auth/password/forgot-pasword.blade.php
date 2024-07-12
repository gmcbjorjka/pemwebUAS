@extends('layouts.app')

@section('content')
<div class="login-right">
  <div class="login-right-wrap">
    <h1>Forgot Password</h1>
    <p class="account-subtitle">Enter your email address to reset your password</p>
    <form action="#" method="POST">
      @csrf
      <div class="form-group">
        <label>Email<span class="login-danger">*</span></label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>
        <span class="profile-views"><i class="fas fa-envelope"></i></span>
        @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Send Password Reset Link</button>
      </div>
    </form>
  </div>
</div>
@endsection