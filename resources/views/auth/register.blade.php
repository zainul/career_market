@extends('layouts.auth')

@section('content')
  <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
      {!! csrf_field() !!}

      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

          <div class="col-md-12">
              <label class=" control-label">Name</label>
              <input type="text" class="form-control" name="name" value="{{ old('name') }}">

              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

          <div class="col-md-12">
              <label class=" control-label">E-Mail Address</label>
              <input type="email" class="form-control" name="email" value="{{ old('email') }}">

              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">

          <div class="col-md-12">
              <label class=" control-label">First Name</label>
              <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">

              @if ($errors->has('firstname'))
                  <span class="help-block">
                      <strong>{{ $errors->first('firstname') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">

          <div class="col-md-12">
              <label class=" control-label">Last Name</label>
              <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">

              @if ($errors->has('lastname'))
                  <span class="help-block">
                      <strong>{{ $errors->first('lastname') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">

          <div class="col-md-12">
              <label class=" control-label">Phone</label>
              <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">

              @if ($errors->has('phone'))
                  <span class="help-block">
                      <strong>{{ $errors->first('phone') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

          <div class="col-md-12">
              <label class=" control-label">Password</label>
              <input type="password" class="form-control" name="password">

              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

          <div class="col-md-12">
              <label class=" control-label">Confirm Password</label>
              <input type="password" class="form-control" name="password_confirmation">

              @if ($errors->has('password_confirmation'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group">
          <div class="col-md-12 col-md-offset-4">
              <button type="submit" class="btn btn-primary">
                  <i class="fa fa-btn fa-user"></i>Register
              </button>
          </div>
      </div>
  </form>
@endsection
