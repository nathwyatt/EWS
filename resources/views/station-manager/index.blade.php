@extends('layouts.stations')

@section('content')

<div class="container">
    
  <div class="row">
  <h1  class="btn btn-badge  bg-dark text-center">   {{ Auth::user()->station->name }}</h1>

  <div class="row">
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                {{-- <p class="card-text">{{ $numStations }}</p> --}}

                <p>community</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{'/community'}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
       
        
          <!-- ./col -->
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner">
                {{-- <p class="card-text">{{ $numRoles }}</p> --}}

                <p>River data</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{'/stationdata'}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                {{-- <p class="card-text">{{ $numUsers }}</p> --}}
                <p>notifications</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{'/users'}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner">
                {{-- <p class="card-text">1</p> --}}

                <p>Bar Chart</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
     </div>
    <div class="small-box bg-white">
     <h1  class="badge  bg-white text-center"> About  station</h1>
    <div class="row">
     <div class="col-md-4">
      <img src="image/photo 1.jpg" alt="Image" class="img-fluid">
     </div>
      <div class="col-md-6">
      <h2 class="badge bg-dark">{{ Auth::user()->station->name }} station</h2>
      <p class="">{{ Auth::user()->station->details }}</p>
      </div>
    </div>
  </div>
  <div class="small-box bg-white">
    <h1  class="badge  bg-white text-center"> Station data</h1>
   <div class="row">
   <div class="col-lg-3 col-3">
    <!-- small box -->
    {{-- @foreach ($data as $item) --}}
    <div class="small-box bg-white">
      <h1  class="badge  bg-white text-center"> Water level</h1>
      <div class="inner">
        {{-- <p class="card-text">{{ $numRoles }}</p> --}}
      </div>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-3">
    <!-- small box -->
    <div class="small-box bg-white">
      <h1  class="badge  bg-white text-center"> Temperature</h1>
      <div class="inner">
        {{-- <p class="card-text">{{ $numRoles }}</p> --}}
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-3">
    <!-- small box -->
    <div class="small-box bg-white">
      <h1  class="badge  bg-white text-center"> hummidity</h1>
      <div class="inner">
        {{-- <p class="card-text">{{ $item->hummidity }}</p> --}}
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-3">
    <!-- small box -->
    <div class="small-box bg-white">
      <h1  class="badge  bg-white text-center"> soil moisture</h1>
      <div class="inner">
        {{-- <p class="card-text">{{ $item->soil_moisture }}</p> --}}
      </div>
    </div>
  </div>
  {{-- @endforeach --}}
   </div>

 </div>
 <div class="small-box bg-white">
  <h1  class="badge  bg-white text-center"> community</h1>
 </div>
</div>
</div>
@endsection