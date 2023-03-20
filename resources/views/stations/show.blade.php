@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show station</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-dark" href="{{ route('stations.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $station->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>districts:</strong>
                {{ $station->district }}
            </div>
        </div>
    </div>
@endsection
<p class="text-center text-dark"><small>Tutorial by LaravelTuts.com</small></p>