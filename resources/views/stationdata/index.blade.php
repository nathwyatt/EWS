@extends('layouts.stations')

@section('content')
<div class="card card-table-border-none dt-responsive nowrap" style="width:100%" id="recent-orders">
  <div class="card-header justify-content-between bg-light text-center">
    <h2>Data Management</h2>
    <div class="date-range-report">
      <span></span>
    </div>
  </div>
  <div class="pull-left">
    <a href="{{ route('stationdata.create') }}" class="dropdown-item">
      <i class="nav-icon fas fa-plus"></i> Add
    </a>
  </div>
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif
</div>

<div class="small-box bg-white">
  <a href="{{'/stationdata'}}" class="badge bg-white text-center">Data collected on {{ Auth::user()->station->name }} station</a>
  <div class="container">
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Time</th>
            <th>Water Level</th>
            <th>Temperature</th>
            <th>Humidity</th>
            <th>Soil Moisture</th>
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
