<!-- Project Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('project_name', 'Project Name:') !!}
    {!! Form::select('project_name',$projects, null, array('class'=>'form-control', 'placeholder'=>'Select Project')) !!}
</div>

<!-- Module Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('module_name', 'Module Name:') !!}
    {!! Form::text('module_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Task Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('task_name', 'Task Name:') !!}
    {!! Form::text('task_name', null, ['class' => 'form-control']) !!}
   
</div>

<!-- Assign To Field -->
<div class="form-group col-sm-6">
    {!! Form::label('assign_to', 'Assign To:') !!}
    {!! Form::select('assign_to', $employees, null, array('class'=>'form-control', 'placeholder'=>'Select Employee')) !!}
</div>

<!-- Task Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('task_status', 'Task Status:') !!}
    {{ Form::select('task_status', ['Pending' => 'Pending', 'Inprogress' => 'Inprogress','Completed' =>'Completed'], null,array('class'=>'form-control', 'placeholder'=>'Select Status')) }} 
</div>

<!-- Task Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('task_start', 'Task Start:') !!}
    {!! Form::text('task_start', null, ['class' => 'form-control','id'=>'task_start']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#task_start').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Task End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('task_end', 'Task End:') !!}
    {!! Form::text('task_end', null, ['class' => 'form-control','id'=>'task_end']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#task_end').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tasks.index') }}" class="btn btn-default">Cancel</a>
</div>
