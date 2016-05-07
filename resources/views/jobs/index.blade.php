@extends('layouts.app')

@section('content')
        <h1 class="pull-left">Jobs</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('jobs.create') !!}">Add New</a>

        <div class="clearfix"></div>

        <div class="clearfix"></div>

        <div class="section">
          @include('jobs.table')
        </div>

@endsection
