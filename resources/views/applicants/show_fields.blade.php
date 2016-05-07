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
