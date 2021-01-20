


<li class="{{ Request::is('customers*') ? 'active' : '' }}">
    <a href="{{ route('customers.index') }}"><i class="fa fa-edit"></i><span>Customers</span></a>
</li>

<li class="{{ Request::is('projects*') ? 'active' : '' }}">
    <a href="{{ route('projects.index') }}"><i class="fa fa-edit"></i><span>Projects</span></a>
</li>

