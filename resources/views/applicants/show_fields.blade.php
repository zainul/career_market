<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $applicant->id !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $applicant->user_id !!}</p>
</div>

<!-- Job Id Field -->
<div class="form-group">
    {!! Form::label('job_id', 'Job Id:') !!}
    <p>{!! $applicant->job_id !!}</p>
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

