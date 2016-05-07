@extends('layouts.app')

@section('content')
<div class="container">
  <div>
      <span>Hello you are logged in <strong>{{ Auth::user()->name }}</strong></span>
  </div>
</div>
@endsection
