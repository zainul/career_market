<div class="table-responsive">
<table class="table table-responsive applicants-table">
    <thead class="bg-primary">
      <tr>
        <th>User Id</th>
        <th>Job Id</th>
        <th>Cover Letter</th>
        <th>Reason</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($applicants as $applicant)
        <tr>
            <td>{!! $applicant->user->name !!}</td>
            <td>{!! $applicant->job->name !!}</td>
            <td>{!! $applicant->cover_letter !!}</td>
            <td>{!! $applicant->reason !!}</td>
            <td>
                {!! Form::open(['route' => ['applicants.destroy', $applicant->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('applicants.show', [$applicant->id]) !!}" class='btn btn-success btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="/applicants/{!! $applicant->id !!}/answer" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
