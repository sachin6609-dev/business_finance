<div class="table-responsive">
    <table class="table" id="projects-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Customer</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)
            <tr>
            <td>{{ $project->name }}</td>
            <td>{{ App\Models\Customer::find($project->customer_id)->name }}</td>
            <td>{{ $project->start_date }}</td>
            <td>{{ $project->end_date ? $project->end_date : "Inprogress" }}</td>
            <td>{{ $project->status == 1 ? "Active" :"Inactive" }}</td>
                <td>
                    {!! Form::open(['route' => ['projects.destroy', $project->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('projects.show', [$project->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('projects.edit', [$project->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
