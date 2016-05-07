<div class="table-responsive">
  <table class="table applicants-table">
      <thead class="bg-primary">
        <tr>
          <th>User Id</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Github</th>
          <th>LinkedIn</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($applicants as $applicant)
          <tr>
              <td>{!! $applicant->user->name !!}</td>
              <td>{!! $applicant->user->email !!}</td>
              <td>{!! $applicant->user->phone !!}</td>
              <td>{!! $applicant->user->github !!}</td>
              <td>{!! $applicant->user->linkedin !!}</td>
              <td>
                  {!! Form::open(['route' => ['applicants.destroy', $applicant->id], 'method' => 'delete']) !!}
                  <div class='btn-group'>
                      <a href="{!! route('applicants.show', [$applicant->id]) !!}" class='btn btn-success btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                      <a href="{!! route('applicants.edit', [$applicant->id]) !!}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                      {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                  </div>
                  {!! Form::close() !!}
              </td>
          </tr>
      @endforeach
      </tbody>
  </table>
</div>
