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
@endsection
