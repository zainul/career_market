<div class="row section">
  <div class="col-sm-12">
    <h2>Looking for {!! $job->name !!} </h2>
  </div>
  <!-- Name Field -->
  <div class="col-sm-12">
  <table class="table table-responsive">
    <tbody>
        <tr>
            <td>
                {!! Form::label('name', 'Name') !!}
            </td>
            <td>
                {!! $job->name !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('industry_id', 'Industry') !!}
            </td>
            <td>
                {!! $job->industry->name !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('employment_type_id', 'Employment Type') !!}
            </td>
            <td>
                {!! $job->employment_type->name !!}
            </td>
        </tr>
    </tbody>
  </table>
  <div>
  <hr/>
  <!-- Location Id Field -->
  <div class="form-group col-sm-3">
      {!! Form::label('location_id', 'Location') !!}
      {!! $job->location->name !!}
  </div>

  <!-- State Field -->
  <div class="form-group col-sm-3">
      {!! Form::label('state', 'State:') !!}
      {!! $job->state !!}
  </div>

  <!-- City Field -->
  <div class="form-group col-sm-3">
      {!! Form::label('city', 'City:') !!}
      {!! $job->city !!}
  </div>

  <!-- Zip Code Field -->
  <div class="form-group col-sm-3">
      {!! Form::label('zip_code', 'Zip Code:') !!}
      {!! $job->zip_code !!}
  </div>
  <!-- Brief Description Field -->
  <div class="form-group col-sm-12">
      <h3>Brief Description</h3>
      <hr/>
      {!! $job->brief_description !!}
  </div>
  <!-- Job Requirement Field -->
  <div class="form-group col-sm-12">
      <h3>Job Requirement</h3>
      <hr/>
      {!! $job->job_requirement !!}
  </div>

  <div class="form-group col-sm-12">
      <h3>Benefit</h3>
      <hr/>
      {!! $job->benefit !!}
  </div>

  <hr/>

  <!-- Category Id Field -->
  <div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category') !!}
    {!! $job->category->name !!}
  </div>

  <!-- Experience Level Id Field -->
  <div class="form-group col-sm-6">
    {!! Form::label('experience_level_id', 'Experience Level') !!}
    {!! $job->experience_level->name !!}
  </div>

  <!-- Functional Id Field -->
  <div class="form-group col-sm-6">
    {!! Form::label('functional_id', 'Functional') !!}
    {!! $job->functional->name !!}
  </div>

  <!-- Education Id Field -->
  <div class="form-group col-sm-6">
    {!! Form::label('education_id', 'Education') !!}
    {!! $job->education->name !!}
  </div>

  <!-- Currency Id Field -->
  <div class="form-group col-sm-6">
    {!! Form::label('currency_id', 'Currency') !!}
    {!! $job->currency->name !!}
  </div>

  <!-- Min Salary Field -->
  <div class="form-group col-sm-6">
    {!! Form::label('min_salary', 'Min Salary') !!}
    {!! $job->min_salary !!}
  </div>

  <!-- Max Salary Field -->
  <div class="form-group col-sm-6">
    {!! Form::label('max_salary', 'Max Salary') !!}
    {!! $job->max_salary !!}
  </div>

  <!-- Keyword Field -->
  <div class="form-group col-sm-6">
    {!! Form::label('keyword', 'Keyword') !!}
    {!! $job->keyword !!}
  </div>
</div>
