@extends('layouts.dashboard')
@section('content')
   
      <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-badge  bg-light text-center">
                <h2 > {{$station->name}} station</h2>
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
                <strong>Details:</strong>
                {{ $station->details }}
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Manager:</strong>
                @if($station->user)
                    {{ $station->user->name }}
                @else
                    N/A
                @endif
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Province:</strong>
                
                {{ $station->province->name}}
                
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>District:</strong>
                {{ $station->district->name }}
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sector:</strong>
                {{ $sector->name }}
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cell:</strong>
                {{ $cell->name }}
            </div>
        </div>
    
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Village:</strong>
                {{ $village->name }}
            </div>
        </div> --}}
    </div>
@endsection
<p class="text-center text-dark"><small>EWS Muvumba</small></p>