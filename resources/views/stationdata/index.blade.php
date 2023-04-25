@extends('layouts.stations')
@section('content')
<div class="container">
<div class="row">
          <div class="col-lg-12 margin-tb">
           <div  class="pull-badge  bg-light text-center">
          <h1>   {{ Auth::user()->station->name }} station</h1>
          </div>
        </div>
</div>
        <div class="small-box bg-white">
          @foreach($data as $dt)
          <h1  class="badge  bg-white text-center">During  {{$dt->created_at}} </h1>
          @endforeach
          <table class="table table-bordered">
            <tr>
                <th>Water level</th>
                <th>Temperature</th>
                <th>Hummidity</th>
                <th>Soil moisture</th>
            </tr>
            <tr>
              @foreach ($data as $key)
                                <td >{{ $key->water_level }}</td>
                                <td>{{ $key->temperature }}</td>
                                <td>{{ $key->hummidity }}</td>
                                <td>{{ $key->soil_moisture }}</td>
              @endforeach
            </tr>
          </table>
         </div>
 
</div>
@endsection