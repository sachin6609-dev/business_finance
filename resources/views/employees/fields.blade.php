<!-- Emp Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emp_name', 'Emp Name:') !!}
    {!! Form::text('emp_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Emp Mobile Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emp_mobile', 'Emp Mobile:') !!}
    {!! Form::number('emp_mobile', null, ['class' => 'form-control']) !!}
</div>

<!-- Emp Personal Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emp_personal_email', 'Emp Personal Email:') !!}
    {!! Form::text('emp_personal_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Emp Company Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emp_company_email', 'Emp Company Email:') !!}
    {!! Form::text('emp_company_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Emp Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emp_role', 'Emp Role:') !!}
    {!! Form::text('emp_role', null, ['class' => 'form-control']) !!}
</div>

<!-- Emp Bankaccount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emp_bankAccount', 'Emp Bankaccount:') !!}
    {!! Form::text('emp_bankAccount', null, ['class' => 'form-control']) !!}
</div>

<!-- Emp Assigned Project Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emp_assigned_project', 'Emp Assigned Project:') !!}
    {{ Form::select('emp_assigned_project', $projects, null, array('class'=>'form-control', 'placeholder'=>'Select Project')) }}
</div>

<!-- Emp Joindate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emp_joinDate', 'Emp Joindate:') !!}
    {!! Form::text('emp_joinDate', null, ['class' => 'form-control','id'=>'emp_joinDate']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#emp_joinDate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('employees.index') }}" class="btn btn-default">Cancel</a>
</div>
