@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Applicant</h1>
            </div>
        </div>

        <div class="row">
            {!! Form::model($applicant, ['route' => ['applicants.update', $applicant->id], 'method' => 'patch']) !!}

            @include('applicants.fields')

            {!! Form::close() !!}
        </div>
@endsection
