
@extends('layouts.dashboard')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-badge  bg-light text-center">
            <h2 > create new station</h2>
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
                <strong>details:</strong>
                <textarea type="text" name="details" class="form-control" placeholder="details"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                 <strong>Province:</strong>
                <select name="province_id" class="form-control">
                    @foreach($province as $pro)
                  <option value="{{$pro->id}}">{{$pro->name}} </option>
                  @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>district:</strong>
                <select name="district_id" class="form-control">
                
                    @foreach($district as $dis)
                  <option value="{{$dis->id}}">{{$dis->name}} </option>
                  @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>sector:</strong>
                <select name="sector_id" class="form-control">
                    @foreach($sector as $sec)
                  <option value="{{$sec->id}}">{{$sec->name}} </option>
                  @endforeach
                </select>            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>cell:</strong>
                <select name="cell_id" class="form-control">
                    @foreach($cell as $cel)
                  <option value="{{$cel->id}}">{{$cel->name}} </option>
                  @endforeach
                </select>            
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>village:</strong>
                <select name="village_id"  class="form-control">
                    @foreach($village as $vil)
                  <option value="{{$vil->id}}">{{$vil->name}} </option>
                  @endforeach
                </select>            
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