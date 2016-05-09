@extends('layouts.app')

@section('content')
        <center>
          <h1>Jobs</h1>
        </center>
        <div>
          <a class="btn btn-primary pull-left" style="margin-top: 20px" href="{!! route('jobs.create') !!}">Add New</a>
        </div>

        <div class="clearfix"></div>

        <div class="clearfix"></div>
        <br/>
        <div class="section">
          @include('jobs.table')
        </div>

@endsection
