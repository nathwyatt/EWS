@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-badge  bg-dark text-center">
            <h2>community Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-badge rounded-pill bg-dark" href="{{ route('community.create') }}"> Create New data</a>
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
        <th>data(id)</th>
        <td>starion(id)</td>
        <th>fname</th>
        <th>fname</th>
        <th>Email</th>
        <th>phone</th>
        <th width="280px">Action</th>
    </tr>
@foreach ($data as $key => $data)
    <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->station_id }}</td>
        <td>{{ $data->fname }}</td>
        <td>{{ $data->lname }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->phone }}</td>
        
        <td>
            <a class="btn btn-info" href="{{ route('community.show',$data->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('community.edit',$data->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['community.destroy', $data->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                
        </td>
    </tr>
@endforeach
</table>
{!! $data->render() !!}
<p class="text-center text-primary"><small>Aime-Wyatt</small></p>
@endsection