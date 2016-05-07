<div class="table-responsive">
<table class="table jobs-table">
    <thead class="bg-primary">
      <tr>
        <th>Name</th>
        <th>Category</th>
        <th>Location</th>
        <th>Employment Type</th>
        <th>Functional</th>
        <th>Education</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($jobs as $job)
        <tr>
            <td>{!! $job->name !!}</td>
            <td>{!! $job->category->name !!}</td>
            <td>{!! $job->location->name !!}</td>
            <td>{!! $job->employment_type->name !!}</td>
            <td>{!! $job->functional->name !!}</td>
            <td>{!! $job->education->name !!}</td>
            <td>
                {!! Form::open(['route' => ['jobs.destroy', $job->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jobs.show', [$job->id]) !!}" class='btn btn-success btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jobs.edit', [$job->id]) !!}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="/jobs/{!! $job->id !!}/applicants" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-list"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
