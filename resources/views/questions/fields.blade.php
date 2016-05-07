
<!-- Job Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('job_id', 'Job Id:') !!}
    <select class="form-control" name="job_id">
      @foreach($jobs as $key => $value)
        <option value="{!! $value->id !!}">
          {!! $value->name !!}
          ({!! $value->location->name !!})
          ({!! $value->category->name !!})
        </option>
      @endforeach
    </select>
</div>

<!-- Description Field -->
<div class="form-group col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control editor-content']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('questions.index') !!}" class="btn btn-default">Cancel</a>
</div>
