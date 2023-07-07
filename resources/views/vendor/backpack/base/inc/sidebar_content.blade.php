@if (auth()->user()->hasRole(['Super','Admin']))
    {{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
@else
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('home') }}"><i class="la la-home nav-icon"></i> Home </a></li>
@endif

@if (auth()->user()->hasRole('Super'))
    <!-- Users, Roles, Permissions -->
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-group"></i> Autenticação</a>
        <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Usuários</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-group"></i> <span>Roles</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
        </ul>
    </li>
@endif

@if (auth()->user()->hasRole('Admin'))
    <!-- Users, Roles, Permissions -->
    <li class="nav-item">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Usuários</span></a></li>
        </ul>
    </li>
@endif


