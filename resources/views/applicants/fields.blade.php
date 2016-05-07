<input type="hidden" name="job_id" value="<?php echo $job_id; ?>" />

<!-- Cover Letter Field -->
<div class="form-group col-sm-12">
    {!! Form::label('cover_letter', 'Cover Letter:') !!}
    {!! Form::textarea('cover_letter', null, ['class' => 'form-control editor-content']) !!}
</div>

<!-- Reason Field -->
<div class="form-group col-sm-12">
    {!! Form::label('reason', 'Reason:') !!}
    {!! Form::textarea('reason', null, ['class' => 'form-control editor-content']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Apply', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('applicants.index') !!}" class="btn btn-default">Cancel</a>
</div>
