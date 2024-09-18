@extends('layouts.stations')
@section('content')
<div class="card card-table-border-none dt-responsive nowrap" style="width:100%" id="recent-orders">

    <div class="row">
      
         <div class="col-lg-12 margin-tb">
            <div class="card-header bg-light justify-content-between text-center">
                <h2>{{$community->fname}} {{$community->lname}}   Details</h2>
                <div class="date-range-report ">
                 <span></span>
                </div>
          </div>
                    <div class="pull-right">
                        <a class="badge  badge-primary" href="{{ route('community.index') }}"> Back</a>
                    </div>
             </div>
      
     <div class="container">
     <div class="card-body">
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Famer Name:</strong>
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
                <strong>Email:</strong>
                    {{ $community->email }}
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12 ">
            <div class="form-group">
                <strong>profession:</strong>
                {{ $community->profession }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 ">
            <div class="form-group">
                <strong>telphone number:</strong>
                {{ $community->phone }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>provice:</strong>
                @if($community->province)
                {{ $community->province->name }}
                @else
                N/A
                @endif

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
    
        </div>
     </div>
     </div>
    </div>
</div>

@endsection
