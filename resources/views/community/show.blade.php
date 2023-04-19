@extends('layouts.stations')
@section('content')
   
      <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-badge  bg-light text-center">
                <h2 > {{$community->fname}} {{$community->lname}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-dark" href="{{ route('community.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $community->fname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>surname:</strong>
                {{ $community->lname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>birth date:</strong>
                {{ $community->birth_date }}
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>gender:</strong>
                    {{ $community->gender }}
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>profession:</strong>
                {{ $community->profession }}
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>District:</strong>
                @if($community->district)
                {{ $community->district->name }}
                @else
                N/A
                @endif

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
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Village:</strong>
                {{ $village->name }}
            </div>
        </div>
    </div>
@endsection
