@extends('layout.app')

@section('content')
  <form method="POST" action="{{ route('register') }}">
  {{ csrf_field() }}

    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="medium-12 cell">
          <label>Name
            <input placeholder="Name" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
          </label>
        </div>
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
        <div class="medium-12 cell">
          <label>Confirm Password
            <input placeholder="Confirm password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
          </label>
        </div>
        <div class="medium-12 cell">
          <input type="submit" class="button" value="Submit">
        </div>
    </div>
  </form>
@endsection
