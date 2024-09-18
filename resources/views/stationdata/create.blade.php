@extends('layouts.dashboard')
@section('content')

<div class="card card-table-border-none dt-responsive nowrap" style="width:100%" id="recent-orders">
    <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="card-header bg-light justify-content-between text-center">
            <h2>new data  </h2>
            <div class="date-range-report ">
             <span></span>
            </div>
      </div>
                <div class="pull-right">
                    <a class="badge  badge-primary" href="{{ route('community.index') }}"> Back</a>
                </div>
         </div>
</div>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{!! Form::open(array('route' => 'stationdata.store','method'=>'POST')) !!}
<div class="container">
	<div class="col-lg-12">
		<div class="card card-default ">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                       <strong>water level:</strong>
                                      {!! Form::text('water_level', null, array('placeholder' => 'waterlevel','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                             <strong>Temperature:</strong>
                                            {!! Form::text('temperature', null, array('placeholder' => 'temperature','class' => 'form-control')) !!}
                              </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                 <strong>Humidity:</strong>
                                                {!! Form::text('hummidity', null, array('placeholder' => 'humidity','class' => 'form-control')) !!}
                                  </div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                     <strong>soil moisture:</strong>
                                                    {!! Form::text('soil_moisture', null, array('placeholder' => 'soil moisture','class' => 'form-control')) !!}
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
                                </form>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
        </div>
    </div>
</div>
</div>
{!! Form::close() !!}
<p class="text-center text-primary"><small>Aime-Wyatt</small></p>
@endsection