@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-badge  bg-dark text-center">
            <h2>Roles Management</h2>
        </div>
        <div class="pull-right">
        @can('role-create')
            <a class="btn btn-badge rounded-pill bg-dark" href="{{ route('roles.create') }}"> Create New Role</a>
            @endcan
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-bordered">
    <tr>
        <th>Role(id)</th>
        <th>Role(name)</th>
        <th width="280px">Action</th>
    </tr>
    
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ $role->id }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
            @can('role-edit')
                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
            @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>
{!! $roles->render() !!}
<p class="text-center text-dark"><small>Aime-Wyatt</Aime-Wyatt></small></p>
@endsection