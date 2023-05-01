@extends('layouts.stations')
@section('content')
<div class="card card-table-border-none dt-responsive nowrap" style="width:100%" id="recent-orders">
      
  <div class="card-header justify-content-between text-center">
     <h2>Data Management</h2>
     <div class="date-range-report ">
      <span></span>
     </div>
</div>
<div class="pull-left">
  <a href="{{route('stationdata.create')}}"class="dropdown-item"> 
    <i class="nav-icon fas fa-plus "></i> Add </a>
  </div>
  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
  <div class="card-body pt-0 pb-5">
         
          <table id="responsive-data-table" class="table dt-responsive nowrap" style="width:100%">
            <tr>
                <th>time </th>
                <th>Water level</th>
                <th>Temperature</th>
                <th>Hummidity</th>
                <th>Soil moisture</th>
            </tr>
            @foreach ($data as $key)
            <tr>
             
                <td>{{ $key->created_at }}</td>
                <td >{{ $key->water_level }}</td>
                <td>{{ $key->temperature }}</td>
                <td>{{ $key->hummidity }}</td>
                <td>{{ $key->soil_moisture }}</td>                
                <td></td>
            </tr>
            @endforeach
          </table>
         </div>
 
</div>
@endsection