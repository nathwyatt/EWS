
@extends('layouts.stations')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-badge  bg-light text-center">
            <h2 >edit {{$community->fname}} {{$community->lname}}</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-dark" href="{{ route('community.index') }}"> Back</a>
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
   
<form action="{{ route('community.update',$community->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row mt-2">
        <div class="col-md-6">
            <div class="form-group">
                <label for="fname">{{ __('First Name') }}</label>
                <input id="fname" type="text" class="form-control" name="fname" value="{{ $community->fname }}" placeholder="fname">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="lname">{{ __('Last Name') }}</label>
                <input id="lname" type="text" class="form-control" name="lname" value="{{ $community->lname }}" required>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-6">
            <div class="form-group">
                <label for="gender">{{ __('Gender') }}</label>
                <select id="gender" class="form-control" name="gender" required>
                    <option value="male" @if($community->gender == 'male') selected @endif>Male</option>
                    <option value="female" @if($community->gender == 'female') selected @endif>Female</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="birth_date">{{ __('Birth Date') }}</label>
                <input id="birth_date" type="date" class="form-control" name="birth_date" value="{{ $community->birth_date }}" required>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ $community->email }}" required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="profession">{{ __('Profession') }}</label>
                <select name="profession" class="form-control">
                    <option value="farmer" @if($community->profession == 'farmer') selected @endif>Farmer</option>
                    <option value="staff" @if($community->profession == 'staff') selected @endif>Staff</option>
                </select>   
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="phone">{{ __('Phone') }}</label>
                <input id="phone" type="number" class="form-control" name="phone" value="{{ $community->phone }}" required>
            </div>
        </div>

<div class="col-md-6">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Province::</strong>
            <select name="province_id" id="province_id" class="form-control">
                @foreach($provinces as $province)
                    <option value="{{ $province->id }}" @if($province->id == $community->province_id) selected @endif>{{ $province->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>district:</strong>
            <select name="district_id"id="district_id" class="form-control">
                @foreach($districts as $district)
              <option value="{{$district->id}}" @if($district->id == $community->district_id) selected @endif> {{$district->name}}</option>
              @endforeach
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>sector:</strong>
            <select name="sector_id" class="form-control">
                @foreach($sectors as $sector)
              <option value="{{$sector->id}}" @if($sector->id == $community->sector_id)selected @endif>{{$sector->name}} </option>
              @endforeach
            </select>            </div>
    </div>
    
</div>
<div class="col-md-6">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>cell:</strong>
            <select name="cell_id" class="form-control">
                @foreach($cells as $cell)
              <option value="{{$cell->id}}" @if($cell->id == $community->cell_id)selected @endif>{{$cell->name}} </option>
              @endforeach
            </select>            
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>village:</strong>
            <select name="village_id"  class="form-control">
                @foreach($villages as $village)
              <option value="{{$village->id}}" @if($village->id == $community->village_id)selected @endif>{{$village->name}} </option>
              @endforeach
            </select>            
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>station:</strong>
            <select name="station_id"  class="form-control">
                @foreach($station as $st)
              <option value="{{$st->id}}" @if($st->id == $community->station_id)selected @endif>{{$st->name}} </option>
              @endforeach
            </select>            
        </div>
    </div>
</div>
</div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-dark">Submit</button>
        </div>
    </div>
   
</form>
@endsection