<table class="table table-responsive questions-table">
    <thead class="bg-primary">
      <tr>
        <th>Description</th>
        <th>Job</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($questions as $question)
        <tr>
            <td>{!! $question->description !!}</td>
            <td>{!! $question->job->name !!}</td>
            <td>
                {!! Form::open(['route' => ['questions.destroy', $question->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('questions.show', [$question->id]) !!}" class='btn btn-success btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('questions.edit', [$question->id]) !!}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
