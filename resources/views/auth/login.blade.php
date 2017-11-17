@extends('layout.app')

@section('content')
  <form method="POST" action="{{ route('login') }}">
  {{ csrf_field() }}
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="medium-12 cell">
          <label>E-Mail Address
            <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
          </label>
        </div>
        <div class="medium-12 cell">
          <label>Password
            <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>
          </label>
        </div>
        <div class="medium-6 cell">
          <input type="submit" class="button" value="Login">
          <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
            Remember Me
          </label>
        </div>
        <div class="medium-6 cell">
        <a class="btn btn-link" href="{{ route('password.request') }}">
            Forgot Your Password?
        </a>
        </div>
      </div>
    </div>
  </form>

@endsection
