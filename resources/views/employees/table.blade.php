<div class="table-responsive">
    <table class="table" id="employees-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Personal Email</th>
                <th>Company Email</th>
                <th>Role</th>
                <th>Assigned Project</th>
                <th>Joindate</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->emp_name }}</td>
                <td>{{ $employee->emp_mobile }}</td>
                <td>{{ $employee->emp_personal_email }}</td>
                <td>{{ $employee->emp_company_email }}</td>
                <td>{{ $employee->emp_role }}</td>
                <td>{{ App\Models\Project::find($employee->emp_assigned_project)->name }}</td>
                <td>{{ $employee->emp_joinDate }}</td>
                <td>{{ $employee->status == 1 ? "Active" :"Inactive"  }}</td>
                <td>
                    {!! Form::open(['route' => ['employees.destroy', $employee->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('employees.show', [$employee->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('employees.edit', [$employee->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
