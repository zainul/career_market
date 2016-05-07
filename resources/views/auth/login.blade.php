@extends('layouts.auth')

@section('content')
  <p class="login-box-msg">Sign in to start your session</p>
  <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
      {!! csrf_field() !!}

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <div class="col-md-12">
              E-Mail Address
              <input type="email" class="form-control" name="email" value="{{ old('email') }}">

              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <div class="col-md-12">
              Password
              <input type="password" class="form-control" name="password">

              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
              <button type="submit" class="btn btn-primary">
                  <i class="fa fa-btn fa-sign-in"></i>Login
              </button>
          </div>
      </div>
  </form>
  <a href="{{ url('/password/reset') }}">I forgot my password</a><br>
  {{-- <a href="/register" class="text-center">Register a new membership</a> --}}
@endsection
