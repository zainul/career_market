@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Create New Applicant</h1>
        </div>
    </div>

    <div class="row">
        {!! Form::open(['route' => 'applicants.store']) !!}

            @include('applicants.fields')

        {!! Form::close() !!}
    </div>
@endsection
