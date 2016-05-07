@extends('layouts.app')

@section('content')
    @include('jobs.show_fields')

    <div class="form-group">
           <a href="{!! route('jobs.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
