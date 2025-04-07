@extends('layouts.dashboard')

@section('content')
<div class="card card-table-border-none dt-responsive nowrap" style="width:100%" id="recent-orders">
  <div class="card-header bg-light text-center">
    <h2 class="mb-0">Sensor Data</h2>
    <p class="mb-0">{{ Auth::user()->station->name }} - {{ Auth::user()->station->district->name }}</p>
    
    <div class="date-range-report mt-2">
      <span></span>
    </div>
  </div>
  
  {{-- <div class="pull-left">
    <a href="{{ route('stationdata.create') }}" class="dropdown-item">
      <i class="nav-icon fas fa-plus"></i> Add
    </a>
  </div> --}}
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif
</div>

<div class="small-box bg-white">
  <a href="{{'/stationdata'}}" class="badge bg-white text-center">Data collected on {{ Auth::user()->station->name }} station</a>
   <!-- Hidden form -->
   <form id="fetch-data-form" action="{{ route('stationdata.store') }}" method="POST" style="display: none;">
    @csrf
    <input type="hidden" name="station_id" value="{{ Auth::user()->station->id }}">
  </form>
  <a href="#" onclick="event.preventDefault(); document.getElementById('fetch-data-form').submit();" class="dropdown-item">
    <i class="nav-icon fas fa-sync-alt"></i> Fetch Data
  </a>
  <div class="container">
        <div class="table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Timestamp</th>
                <th>Air Temp (°C)</th>
                <th>Air Humidity (%)</th>
                <th>Barometric Pressure (hPa)</th>
                <th>Light Intensity (W/m²)</th>
                <th>Wind Direction (°)</th>
                <th>Wind Speed (m/s)</th>
                <th>Rainfall Acc. (mm)</th>
                <th>Rainfall Hourly (mm/h)</th>
                <th>Soil Temp (°C)</th>
                <th>Soil Moisture (%)</th>
                <th>Water Level</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
                <tr>
                  <td>{{ $item->timestamp ?? $item->created_at }}</td>
                  <td>{{ $item->air_temperature }}</td>
                  <td>{{ $item->air_humidity }}</td>
                  <td>{{ $item->barometric_pressure }}</td>
                  <td>{{ $item->light_intensity }}</td>
                  <td>{{ $item->wind_direction }}</td>
                  <td>{{ $item->wind_speed }}</td>
                  <td>{{ $item->rainfall_accumulated }}</td>
                  <td>{{ $item->rainfall_hourly }}</td>
                  <td>{{ $item->soil_temperature }}</td>
                  <td>{{ $item->soil_volumetric_water_content }}</td>
                  <td>{{ $item->water_level }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
</div>

<script>
  $(document).ready(function() {
    $('#example1').DataTable({
      responsive: true,
      paging: true,
      pageLength: 5
    });
  });
</script>
@endsection
