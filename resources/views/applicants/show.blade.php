@extends('layouts.app')

@section('content')
    @include('applicants.show_fields')

    <div class="form-group">
           <a href="{!! route('applicants.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
