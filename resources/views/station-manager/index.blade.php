@extends('layouts.stations')

@section('content')

<div class="container">
  <h1 class="pull-badge  bg-light text-center">   {{ Auth::user()->station->name }}</h1>   
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
    @foreach($data as $dt)
    <h1  class="badge  bg-white text-center"> Station status  {{$dt->created_at}}</h1>
   @endforeach
    <div class="row">
    
        
   <div class="col-lg-3 col-3">
    <!-- small box -->
    
        <div class="small-box bg-white">
            <h1 class="badge bg-white text-center">Water level</h1>
            <div class="inner">
              @if (!empty($data))
              @foreach ($data as $item)
                {{ $item->water_level }}
                @endforeach
                @endif
            </div>
        </div>
  </div>
 
 
  <!-- ./col -->
  <div class="col-lg-3 col-3">
    <!-- small box -->
    <div class="small-box bg-white">
      <h1  class="badge  bg-white text-center"> Temperature</h1>
      <div class="inner">
        @if (!empty($data))
        @foreach ($data as $item)
        <p class="card-text">{{ $item->temperature }}</p>
        @endforeach
        @endif
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-3">
    <!-- small box -->
    <div class="small-box bg-white">
      <h1  class="badge  bg-white text-center"> hummidity</h1>
      <div class="inner">
        @if (!empty($data))
        @foreach ($data as $item)
        <p class="card-text">{{ $item->hummidity }}</p>
        @endforeach
        @endif
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-3">
    <!-- small box -->
    <div class="small-box bg-white">
      <h1  class="badge  bg-white text-center"> soil moisture</h1>
      <div class="inner">
        @if (!empty($data))
        @foreach ($data as $item)
        <p class="card-text">{{ $item->soil_moisture }}</p>
        @endforeach
        @endif
      </div>
    </div>
  </div>

   </div>

 </div>
 <div class="small-box bg-white">
  <h1  class="badge  bg-white text-center"> farmers around {{ Auth::user()->station->name }}</h1>
  <table class="table table-bordered">
    <tr>
        <th>data(id)</th>
        <th>fname</th>
        <th>fname</th>
        <th>Email</th>
        <th>phone</th>
    </tr>
@foreach ($com as $key => $com)
    <tr>
        <td>{{$com->id}}</td>
        <td>{{ $com->fname }}</td>
        <td>{{ $com->lname }}</td>
        <td>{{ $com->email }}</td>
        <td>{{ $com->phone }}</td>
    </tr>
  @endforeach
  </table>
 </div>
</div>
</div>
@endsection