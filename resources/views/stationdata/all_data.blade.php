{{-- @extends('layouts.dashboard')

@section('content')
<div class="card card-table-border-none dt-responsive nowrap" style="width:100%" id="recent-orders">
    <div class="card-header justify-content-between bg-light text-center">
        <h2>Data Management</h2>
        <div class="date-range-report">
            <span></span>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container">
        <h5 class="badge bg-white"><strong>{{$stationdata->name}} station</strong></h5>
        <div class="card-header" style="background-color: #2ed3aa;">
            <h5 class="card-title">Station Info</h5>   
        </div>
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Station Name</th>
                <th>Sector</th>
                <th>Cell</th>
                <th>First Entry date</th>
                <th>Last Entry Date</th>
                <th>Number of Rows</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{ $stationdata->name }}</td>
                <td>{{ $stationdata->sector->name }}</td>
                <td>{{ $stationdata->cell->name }}</td>
                <td>{{ $startDate ? $startDate->format('Y-m-d') : 'No data available' }}</td>
                <td>{{ $lastDate ? $lastDate->format('Y-m-d') : 'No data available' }}</td>
                <td>{{ $data->count() }}</td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>  
</div>

<div class="small-box bg-white">
  <div class="container">
    <h5 class="badge bg-white"><strong>Data From Device</strong></h5>
    <div class="card-header" style="background-color: #2ed3aa;">
        <h5 class="card-title">Data Info</h5>   
    </div>
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Time</th>
            <th>Water Level</th>
            <th>Temperature</th>
            <th>Humidity</th>
            <th>Soil Moisture</th>
            <th>latitude</th>
            <th>longitude</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $key)
            <tr>
              <td>{{ $key->created_at }}</td>
              <td>{{ $key->water_level }}</td>
              <td>{{ $key->temperature }}</td>
              <td>{{ $key->hummidity }}</td>
              <td>{{ $key->soil_moisture }}</td>
              <td>{{ $key->latitude }}</td>
              <td>{{ $key->longitude }}</td>
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
@endsection --}}
@extends('layouts.dashboard')

@section('content')
<div class="card card-table-border-none dt-responsive nowrap" style="width:100%" id="recent-orders">
    <div class="card-header justify-content-between bg-light text-center">
        <h2>Data Management</h2>
        <div class="date-range-report">
            <span></span>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="container">
        <h5 class="badge bg-white"><strong>{{ $station->name }} station</strong></h5>

        <div class="card-header" style="background-color: #2ed3aa;">
            <h5 class="card-title">Device Status</h5>   
        </div>
  
      <form id="device-status-form" action="{{ route('stationdata.fetch_status') }}" method="POST" style="display: none;">
        @csrf
        <input type="hidden" name="station_id" value="{{ $station->id }}">
      </form>

      <a href="#" onclick="event.preventDefault(); document.getElementById('device-status-form').submit();" class="dropdown-item">
        <i class="nav-icon fas fa-microchip"></i> Fetch Status
      </a>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Device Status</th>
                    <th>Signal Strength (dBm)</th>
                    <th>Pressure (hPa)</th>
                    <th>Battery Voltage (V)</th>
                    <th>Temperature (°C)</th>
                    <th>Illuminance (lux)</th>
                    <th>Humidity (%)</th>
                    <th> Date & Time</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ $stationdata->status }}</td>
                    <td>{{ $stationdata->signal_strength}}</td>
                    <td>{{ $stationdata->pressure	}}</td>
                    <td>{{ $stationdata->battery_voltage }}</td>
                    <td>{{ $stationdata->temperature}}</td>
                    <td>{{ $stationdata->illuminance}}</td>
                    <td>{{ $stationdata->humidity}}</td>
                    <td>{{ $stationdata->timestamp}}</td>
                  </tr>
                </tbody>
            </table>
        </div>
    </div>  
</div>

<div class="small-box bg-white">
  <div class="container">
    <h5 class="badge bg-white"><strong>Data From Device</strong></h5>
 
    <div class="card-header" style="background-color: #2ed3aa;">
        <h5 class="card-title">Sensor Data</h5>   
    </div>
   <!-- Hidden form -->
   <form id="fetch-data-form" action="{{ route('stationdata.store') }}" method="POST" style="display: none;">
    @csrf
    <input type="hidden" name="station_id" value="{{ $station->id }}">
  </form>

  <a href="#" onclick="event.preventDefault(); document.getElementById('fetch-data-form').submit();" class="dropdown-item">
    <i class="nav-icon fas fa-sync-alt"></i> Fetch Data
  </a>
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
      pageLength: 10
    });
  });
</script>
@endsection
