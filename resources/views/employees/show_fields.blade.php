<!-- Emp Name Field -->
<div class="form-group">
    {!! Form::label('emp_name', 'Emp Name:') !!}
    <p>{{ $employee->emp_name }}</p>
</div>

<!-- Emp Mobile Field -->
<div class="form-group">
    {!! Form::label('emp_mobile', 'Emp Mobile:') !!}
    <p>{{ $employee->emp_mobile }}</p>
</div>

<!-- Emp Personal Email Field -->
<div class="form-group">
    {!! Form::label('emp_personal_email', 'Emp Personal Email:') !!}
    <p>{{ $employee->emp_personal_email }}</p>
</div>

<!-- Emp Company Email Field -->
<div class="form-group">
    {!! Form::label('emp_company_email', 'Emp Company Email:') !!}
    <p>{{ $employee->emp_company_email }}</p>
</div>

<!-- Emp Role Field -->
<div class="form-group">
    {!! Form::label('emp_role', 'Emp Role:') !!}
    <p>{{ $employee->emp_role }}</p>
</div>

<!-- Emp Bankaccount Field -->
<div class="form-group">
    {!! Form::label('emp_bankAccount', 'Emp Bankaccount:') !!}
    <p>{{ $employee->emp_bankAccount }}</p>
</div>

<!-- Emp Assigned Project Field -->
<div class="form-group">
    {!! Form::label('emp_assigned_project', 'Emp Assigned Project:') !!}
    <p>{{ $employee->emp_assigned_project }}</p>
</div>

<!-- Emp Joindate Field -->
<div class="form-group">
    {!! Form::label('emp_joinDate', 'Emp Joindate:') !!}
    <p>{{ $employee->emp_joinDate }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $employee->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $employee->updated_at }}</p>
</div>

