@extends('layouts.app')

@section('content')
    <div class="section">
      <div>
          <h3>Answer For Job {!! $applicant->job->name !!}</h3>
      </div>
      <?php $applicant_id = $applicant->id; ?>
      <div>
        <table class="table">
          @foreach($applicant->job->questions as $key => $value)
            <tr>
              <td>
                Q: {!! $value->description !!}
              </td>
            </tr>
            <tr>
              <td>
                {!! Form::open(['route' => 'applicants.answered']) !!}
                  <input type="text" name="answer" class="form-control" placeholder="please answer"/>
                  <input type="hidden" name="question_id" value="<?php echo $value->id; ?>"
                  class="form-control" placeholder="please answer"/>
                  <input type="hidden" name="applicant_id" value="<?php echo $applicant_id; ?>"
                  class="form-control" placeholder="please answer"/>
                  <br/>
                  <input type="submit" class="btn btn-primary" value="Answer"/>
                {!! Form::close() !!}
              </td>
            </tr>
          @endforeach
        </table>
      </div>
    </div>
@endsection
