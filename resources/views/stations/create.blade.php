
@extends('layouts.dashboard')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New station</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-dark" href="{{ route('stations.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('stations.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>district:</strong>
                <input type="text" name="district" class="form-control" placeholder="district">
            </div>
        </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
     <div class="form-group">
                <strong>Manager:</strong>
            <select name="user_id" class="form-control">
            @foreach($managers as $user)
          <option value="{{$user->id}}">{{$user->name}} </option>
          @endforeach
           </select>
     </div>
   </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-dark">Submit</button>
        </div>
    </div>
   
</form>
@endsection