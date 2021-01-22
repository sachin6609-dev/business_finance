<!-- Project Name Field -->
<div class="form-group">
    {!! Form::label('project_name', 'Project Name:') !!}
    <p>{{ $tasks->project_name }}</p>
</div>

<!-- Module Name Field -->
<div class="form-group">
    {!! Form::label('module_name', 'Module Name:') !!}
    <p>{{ $tasks->module_name }}</p>
</div>

<!-- Task Name Field -->
<div class="form-group">
    {!! Form::label('task_name', 'Task Name:') !!}
    <p>{{ $tasks->task_name }}</p>
</div>

<!-- Assign To Field -->
<div class="form-group">
    {!! Form::label('assign_to', 'Assign To:') !!}
    <p>{{ $tasks->assign_to }}</p>
</div>

<!-- Task Status Field -->
<div class="form-group">
    {!! Form::label('task_status', 'Task Status:') !!}
    <p>{{ $tasks->task_status }}</p>
</div>

<!-- Task Start Field -->
<div class="form-group">
    {!! Form::label('task_start', 'Task Start:') !!}
    <p>{{ $tasks->task_start }}</p>
</div>

<!-- Task End Field -->
<div class="form-group">
    {!! Form::label('task_end', 'Task End:') !!}
    <p>{{ $tasks->task_end }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tasks->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tasks->updated_at }}</p>
</div>

