@extends('layouts.stations')

@section('content')

<div class="container">
  
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="card-header justify-content-between text-center">
          <h2> {{Auth::user()->Station->name }} station </h2>
          <div class="date-range-report ">
           <span></span>
          </div>
    </div>
       </div>
  </div>
  
  <div class="row">
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner ">
                <p class="card-text text-yellow">{{ $numfarmers }}</p>

                <p class="card-text text-yellow">community</p>
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
            <div class="small-box bg-warning">
              <div class="inner">
                <p class="card-text ">{{ $numdata }}</p>

                <p class="card-text ">River data</p>
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
            <div class="small-box bg-success">
              <div class="inner ">
                <p class="card-text text-yellow">2</p>
                <p class="card-text text-yellow">notifications</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <p class="card-text text-yellow">1</p>

                <p class="card-text text-yellow">Bar Chart</p>
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
    <h1  class="badge  bg-white text-center"> Data at {{ Auth::user()->station->name }} station</h1>
    @if (!empty($data))
    @foreach ($data as $item)
    <div class="container">
    {{$item->created_at}}
    <div class="row">
    
   <div class="col-lg-3 col-3">
  
        <div class="small-box bg-green">
            <h1 class="badge  text-center">Water level</h1>
            <div class="inner">
             
              
                {{ $item->water_level }}
               
            </div>
        </div>
  </div>
 
 

  <div class="col-lg-3 col-3">
 
    <div class="small-box bg-yellow">
      <h1  class="badge   text-center"> Temperature</h1>
      <div class="inner">
        
        <p class="card-text">{{ $item->temperature }}</p>
       
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-3">
  
    <div class="small-box bg-orange">
      <h1  class="badge   text-center"> hummidity</h1>
      <div class="inner">
      
        <p class="card-text">{{ $item->hummidity }}</p>
        
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-3">
    
    <div class="small-box bg-pink">
      <h1  class="badge   text-center"> soil moisture</h1>
      <div class="inner">
      
        <p class="card-text">{{ $item->soil_moisture }}</p>
      
      </div>
    </div>
  </div>
    </div>
    </div>
  @endforeach
  @endif
   </div>

 </div>
 <div class="small-box bg-white">
  <h1  class="badge  bg-white text-center"> farmers around {{ Auth::user()->station->name }}</h1>
  <div class="container">
    <table id="responsive-data-table" class="table dt-responsive nowrap table-hover" style="width:100%">
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
 <div class="card">
  <div class="card-header">
    <h3 class="card-title">
      <i class="ion ion-clipboard mr-1"></i>
      To Do List
    </h3>

    <div class="card-tools">
      <ul class="pagination pagination-sm">
        <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
        <li class="page-item"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
      </ul>
    </div>
  </div>

</div>
</div>
@endsection