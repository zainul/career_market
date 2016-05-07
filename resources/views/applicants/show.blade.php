@extends('layouts.app')

@section('content')
    <div class="section">
      @include('applicants.show_fields')
    </div>

    <div class="form-group">
           <a href="{!! URL::previous(); !!}" class="btn btn-default">Back</a>
    </div>
@endsection
