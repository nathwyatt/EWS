@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="card-header bg-light justify-content-between text-center">
                <h2>Edit {{$station->name }} station </h2>
                <div class="date-range-report ">
                 <span></span>
                </div>
          </div>
                    <div class="pull-right">
                        <a class="badge  badge-primary" href="{{ route('stations.index') }}"> Back</a>
                    </div>
             </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Something went wrong.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card card-table-border-none dt-responsive nowrap" style="width:100%" id="recent-orders">

        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    
        <div class="container">
                    <div class="card-body">

    <form action="{{ route('stations.update',$station->id) }}" method="POST">
    	@csrf
        @method('PUT')

         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="name" value="{{ $station->name }}" class="form-control" placeholder="Name">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Detail:</strong>
                    {{-- <input type="text" name="details"value="{{$station->details}}" class="form-control" placeholder="details" width="200px" length="200px" style="height:150px"> --}}
		            <textarea class="form-control" style="height:150px" name="details" placeholder="Detail">{{$station->details}}</textarea>
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>province:</strong>
                    <select name="province_id" id="province_id" class="form-control">
                        @foreach($provinces as $province)
                            <option value="{{ $province->id }}" @if($province->id == $station->province_id) selected @endif>{{ $province->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="sector_id">district:</label>
                <select name="district_id" id="district_id" class="form-control">
                    @foreach($districts as $district)
                        <option value="{{ $district->id }}" @if($district->id == $station->district_id) selected @endif>{{ $district->name }}</option>
                    @endforeach
                </select>
            </div>
             
            <div class="form-group">
                <label for="sector_id">Sector:</label>
                <select name="sector_id" id="sector_id" class="form-control">
                    @foreach($sectors as $sector)
                        <option value="{{ $sector->id }}" @if($sector->id == $station->sector_id) selected @endif>{{ $sector->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="sector_id">cell:</label>
                <select name="cell_id" id="cell_id" class="form-control">
                    @foreach($cells as $cell)
                        <option value="{{ $cell->id }}" @if($cell->id == $station->cell_id) selected @endif>{{ $cell->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="sector_id">village:</label>
                <select name="village_id" id="village_id" class="form-control">
                    @foreach($villages as $village)
                        <option value="{{ $village->id }}" @if($village->id == $station->village_id) selected @endif>{{ $village->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="sector_id">Station Manager:</label>
                <select name="user_id" id="user_id" class="form-control">
                    @foreach($managers as $manager)
                        <option value="{{ $manager->id }}" @if($manager->id == $station->user_id) selected @endif>{{ $manager->name }}</option>
                    @endforeach
                </select>
            </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		      <button type="submit" class="btn btn-primary">update</button>
		    </div>
		</div>


    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection