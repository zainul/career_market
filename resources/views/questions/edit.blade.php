@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Question</h1>
            </div>
        </div>

        <div class="row">
            {!! Form::model($question, ['route' => ['questions.update', $question->id], 'method' => 'patch']) !!}

            @include('questions.fields')

            {!! Form::close() !!}
        </div>
@endsection
