@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Create New Job</h1>
        </div>
    </div>

    <div class="row">
        {!! Form::open(['route' => 'jobs.store']) !!}

            @include('jobs.fields')

        {!! Form::close() !!}
    </div>
@endsection
