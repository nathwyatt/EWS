@extends('layouts.dashboard')
@section('content')
<div class="card card-table-border-none dt-responsive nowrap" style="width:100%" id="recent-orders">
    <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="card-header bg-light justify-content-between text-center">
            <h2>create new role  </h2>
            <div class="date-range-report ">
             <span></span>
            </div>
      </div>
                <div class="pull-right">
                    <a class="badge  badge-primary" href="{{ route('roles.index') }}"> Back</a>
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
{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
<div class="container">
	<div class="col-lg-12">
		<div class="card card-default ">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permission:</strong>
            <br/>
            @foreach($permission as $value)
                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                {{ $value->name }}</label>
            <br/>
            @endforeach
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</div>
</div>
</div>
{!! Form::close() !!}
<p class="text-center text-dark"><small>Tutorial by LaravelTuts.com</small></p>

@endsection