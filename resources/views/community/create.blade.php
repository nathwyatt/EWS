
@extends('layouts.stations')
  
@section('content')
<div class="card card-table-border-none dt-responsive nowrap" style="width:100%" id="recent-orders">
    <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="card-header  justify-content-between text-center">
            <h2>Register new farmer </h2>
            <div class="date-range-report ">
             <span></span>
            </div>
      </div>
                <div class="pull-right">
                    <a class="badge  badge-primary" href="{{ route('community.index') }}"> Back</a>
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
   
<form action="{{ route('community.store') }}" method="POST">
    @csrf
    <div class="container">
        <div class="card card-default bg-light">
            <div class="row mt-2">
                <div class="col-md-6">
                <div class="form-group">
        <label for="fname">{{ __('First Name') }}</label>
        <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}" required>
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
        <label for="lname">{{ __('Last Name') }}</label>
        <input id="lname" type="text" class="form-control" name="lname" value="{{ old('lname') }}" required>
    </div>
    </div>
<div class="col-md-6">
    <div class="form-group">
        <label for="gender">{{ __('Gender') }}</label>
        <select id="gender" class="form-control" name="gender" required>
            <option value="male" @if(old('gender') == 'male') selected @endif>Male</option>
            <option value="female" @if(old('gender') == 'female') selected @endif>Female</option>
        </select>
    </div>
</div>
    <div class="col-md-6">
    <div class="form-group">
        <label for="birth_date">{{ __('Birth Date') }}</label>
        <input id="birth_date" type="date" class="form-control" name="birth_date" value="{{ old('birth_date') }}" required>
    </div>
    </div>

<div class="col-md-6">
    <div class="form-group">
        <label for="email">{{ __('Email') }}</label>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        <label for="profession">{{ __('Profession') }}</label>
        <select name="profession" class="form-control">
          <option value="farmer">Farmer </option>
          <option value="staff">Staff </option>
        </select>   
     </div>
</div>
<div class="col-md-3">
<div class="form-group">
    <label for="phone">{{ __('Phone') }}</label>
    <input id="phone" type="number" class="form-control" name="phone" value="{{ old('phone') }}" required>
</div>
</div>

<div class="col-md-6">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Province::</strong>
            <select name="province_id" class="form-control">
                @foreach($province as $prov)
              <option value="{{$prov->id}}">{{$prov->name}} </option>
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
    
</div>
<div class="col-md-6">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>cell:</strong>
        <select name="cell_id" class="form-control select2">
            @foreach($cell as $cel)
                <option value="{{$cel->id}}">{{$cel->name}}</option>
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
            <strong>station:</strong>
            <select name="station_id"  class="form-control">
                @foreach($station as $st)
              <option value="{{$st->id}}">{{$st->name}} </option>
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
    </div>
</form>

</div>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
@endsection