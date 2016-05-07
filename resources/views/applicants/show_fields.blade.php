<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User') !!}
    <p>{!! $applicant->user->name !!}</p>
</div>

<!-- Job Id Field -->
<div class="form-group">
    {!! Form::label('job_id', 'Job Applied') !!}
    <p>{!! $applicant->job->name !!}</p>
</div>

<!-- Cover Letter Field -->
<div class="form-group">
    {!! Form::label('cover_letter', 'Cover Letter:') !!}
    <p>{!! $applicant->cover_letter !!}</p>
</div>

<!-- Reason Field -->
<div class="form-group">
    {!! Form::label('reason', 'Reason:') !!}
    <p>{!! $applicant->reason !!}</p>
</div>

<h3>Educational Background</h3>
<hr/>
@foreach($applicant->user->educational_backgrounds as $key => $value)
  <div class="row">
    <div class="col-sm-3">{!! $value->education->name !!}</div>
    <div class="col-sm-3">{!! $value->school !!}</div>
    <div class="col-sm-3">{!! $value->start !!}</div>
    <div class="col-sm-3">{!! $value->end !!}</div>
  </div>
  <hr/>
@endforeach

<h3>Work Experience</h3>
<hr/>
@foreach($applicant->user->work_experiences as $key => $value)
  <div class="row">
    <div class="col-sm-3">{!! $value->company_name !!}</div>
    <div class="col-sm-3">{!! $value->position !!}</div>
    <div class="col-sm-3">{!! $value->start !!}</div>
    <div class="col-sm-3">{!! $value->end !!}</div>
    <br/><br/>
    <div class="col-sm-3">
      <b>Work Description</b>
    </div>
    <br/>
    <div class="col-sm-8">
      {!! $value->description !!}
    </div>
  </div>
  <hr/>
@endforeach
