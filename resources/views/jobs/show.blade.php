@extends('layouts.app')

@section('content')
    @include('jobs.show_fields')

    <div class="form-group">
      <a href="{!! route('jobs.index') !!}" class="btn btn-default">Back</a>
      @if(!\Auth::user()->isTeamMember())
        <a href="/jobs/{!! $job->id !!}/applicant/create" class="btn btn-success">Apply</a>
      @endif
    </div>
@endsection
