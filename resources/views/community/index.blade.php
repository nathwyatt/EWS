@extends('layouts.stations')
@section('content')

<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
    <div  class="pull-badge  bg-light text-center">
    <h1>   {{ Auth::user()->station->name }} Farmers management</h1>
    </div>
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-badge  bg-dark" href="{{ route('community.create') }}"> Create New person</a>
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
        <th>id</th>
        <th>name</th>
        <th>surname</th>
        <th>Email</th>
        <th>phone</th>
        <th>station</th>
        <th width="280px">Action</th>
    </tr>
@foreach ($community as $data)
    <tr>
        <td>{{ $data->id }}</td>
        {{-- <td>{{ $data->station_id }}</td> --}}
        <td>{{ $data->fname }}</td>
        <td>{{ $data->lname }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->phone }}</td>
        <td>{{$data->station->name }}</td>
       
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
  {{-- {!! $data->render() !!} --}}
  <p class="text-center text-primary"><small>Aime-Wyatt</small></p>
</div>
@endsection