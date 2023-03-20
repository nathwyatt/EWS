@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-badge  bg-dark text-center">
            <h2>Users Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-badge rounded-pill bg-dark" href="{{ route('users.create') }}"> Create New User</a>
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
        <th>User(id)</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th width="280px">Action</th>
    </tr>
@foreach ($data as $key => $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                @endforeach
            @endif
        </td>
        <td>
            <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
            @can('user-create')
            <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                @endcan
        </td>
    </tr>
@endforeach
</table>
{!! $data->render() !!}
<p class="text-center text-primary"><small>Aime-Wyatt</small></p>
@endsection