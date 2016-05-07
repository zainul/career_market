@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Create New Question</h1>
        </div>
    </div>

    <div class="row">
        {!! Form::open(['route' => 'questions.store']) !!}

            @include('questions.fields')

        {!! Form::close() !!}
    </div>
@endsection
