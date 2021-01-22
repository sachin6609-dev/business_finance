<div class="table-responsive">
    <table class="table" id="tasks-table">
        <thead>
            <tr>
                <th>Project Name</th>
                <th>Module Name</th>
                <th>Task Name</th>
                <th>Assign To</th>
                <th>Task Status</th>
                <th>Task Start</th>
                <th>Task End</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tasks as $tasks)
            <tr>
                <td>{{ App\Models\Project::find($tasks->project_name)->name }}</td>
                <td>{{ $tasks->module_name }}</td>
                <td>{{ $tasks->task_name }}</td>
                <td>{{ App\Models\Employee::find($tasks->assign_to)->emp_name }}</td>
                <td>{{ $tasks->task_status }}</td>
                <td>{{ $tasks->task_start }}</td>
                <td>{{ $tasks->task_end }}</td>
                <td>
                    {!! Form::open(['route' => ['tasks.destroy', $tasks->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tasks.show', [$tasks->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tasks.edit', [$tasks->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
