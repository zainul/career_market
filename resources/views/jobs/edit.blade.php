@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Job</h1>
            </div>
        </div>

        <div class="row">
            {!! Form::model($job, ['route' => ['jobs.update', $job->id], 'method' => 'patch']) !!}

            @include('jobs.fields')

            {!! Form::close() !!}
        </div>
@endsection
