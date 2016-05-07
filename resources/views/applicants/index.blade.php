@extends('layouts.app')

@section('content')
        <h1 class="pull-left">Applicants</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('applicants.create') !!}">Add New</a>

        <div class="clearfix"></div>

        <div class="clearfix"></div>

        @include('applicants.table')

@endsection
