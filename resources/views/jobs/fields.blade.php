<div class="row section">
  <!-- Name Field -->
  <div class="form-group col-sm-5">
      {!! Form::label('name', 'Name:') !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>

  <!-- Industry Id Field -->
  <div class="form-group col-sm-4">
      {!! Form::label('industry_id', 'Industry Id:') !!}
      {!! Form::select('industry_id', $industries->lists('name', 'id'),null,
                              ['class'=>'form-control']) !!}
  </div>

  <!-- Employment Type Id Field -->
  <div class="form-group col-sm-3">
      {!! Form::label('employment_type_id', 'Employment Type Id:') !!}
      {!! Form::select('employment_type_id', $employmentTypes->lists('name', 'id'),null,
                              ['class'=>'form-control']) !!}
  </div>

  <!-- Location Id Field -->
  <div class="form-group col-sm-3">
      {!! Form::label('location_id', 'Location Id:') !!}
      {!! Form::select('location_id', $locations->lists('name', 'id'),null,
                              ['class'=>'form-control']) !!}
  </div>

  <!-- State Field -->
  <div class="form-group col-sm-3">
      {!! Form::label('state', 'State:') !!}
      {!! Form::text('state', null, ['class' => 'form-control']) !!}
  </div>

  <!-- City Field -->
  <div class="form-group col-sm-3">
      {!! Form::label('city', 'City:') !!}
      {!! Form::text('city', null, ['class' => 'form-control']) !!}
  </div>

  <!-- Zip Code Field -->
  <div class="form-group col-sm-3">
      {!! Form::label('zip_code', 'Zip Code:') !!}
      {!! Form::text('zip_code', null, ['class' => 'form-control']) !!}
  </div>

</div>

<div class="row section">
  <!-- Brief Description Field -->
  <div class="form-group col-sm-12">
      {!! Form::label('brief_description', 'Brief Description:') !!}
      {!! Form::textarea('brief_description', null, ['class' => 'form-control editor-content']) !!}
  </div>
</div>

<div class="row section">
  <!-- Job Requirement Field -->
  <div class="form-group col-sm-12">
      {!! Form::label('job_requirement', 'Job Requirement:') !!}
      {!! Form::textarea('job_requirement', null, ['class' => 'form-control  editor-content']) !!}
  </div>
</div>

<!-- Benefit Field -->
<div class="row section">
  <div class="form-group col-sm-12">
      {!! Form::label('benefit', 'Benefit:') !!}
      {!! Form::textarea('benefit', null, ['class' => 'form-control  editor-content']) !!}
  </div>
</div>

<div class="row section">
  <!-- Category Id Field -->
  <div class="form-group col-sm-3">
    {!! Form::label('category_id', 'Category Id:') !!}
    {!! Form::select('category_id', $categories->lists('name', 'id'),null,
                            ['class'=>'form-control']) !!}
  </div>

  <!-- Experience Level Id Field -->
  <div class="form-group col-sm-3">
    {!! Form::label('experience_level_id', 'Experience Level Id:') !!}
    {!! Form::select('experience_level_id', $experienceLevels->lists('name', 'id'),null,
                            ['class'=>'form-control']) !!}
  </div>

  <!-- Functional Id Field -->
  <div class="form-group col-sm-3">
    {!! Form::label('functional_id', 'Functional Id:') !!}
    {!! Form::select('functional_id', $functionals->lists('name', 'id'),null,
                            ['class'=>'form-control']) !!}
  </div>

  <!-- Education Id Field -->
  <div class="form-group col-sm-3">
    {!! Form::label('education_id', 'Education Id:') !!}
    {!! Form::select('education_id', $educations->lists('name', 'id'),null,
                            ['class'=>'form-control']) !!}
  </div>



  <!-- Currency Id Field -->
  <div class="form-group col-sm-2">
    {!! Form::label('currency_id', 'Currency Id:') !!}
    {!! Form::select('currency_id', $currencies->lists('name', 'id'),null,
                            ['class'=>'form-control']) !!}
  </div>

  <!-- Min Salary Field -->
  <div class="form-group col-sm-5">
    {!! Form::label('min_salary', 'Min Salary:') !!}
    {!! Form::number('min_salary', null, ['class' => 'form-control']) !!}
  </div>

  <!-- Max Salary Field -->
  <div class="form-group col-sm-5">
    {!! Form::label('max_salary', 'Max Salary:') !!}
    {!! Form::number('max_salary', null, ['class' => 'form-control']) !!}
  </div>

  <!-- Keyword Field -->
  <div class="form-group col-sm-12">
    {!! Form::label('keyword', 'Keyword:') !!}
    {!! Form::text('keyword', null, ['class' => 'form-control']) !!}
  </div>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jobs.index') !!}" class="btn btn-default">Cancel</a>
</div>
