@extends('layouts.dashboard')

@section('content')

<div class="card card-table-border-none dt-responsive nowrap" style="width: 100%" id="recent-orders">
  <div class="card-header justify-content-between bg-light text-center">
    <h2>Farmers Management</h2>
    <div class="date-range-report">
      <span></span>
    </div>
  </div>

  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif
</div>
  <div class="small-box bg-white">
    <div class="container">
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Surname</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Station</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($community as $data)
              <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->fname }}</td>
                <td>{{ $data->lname }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->phone }}</td>
                <td>{{ $data->station->name }}</td>
              
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Surname</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Station</th>
            </tr>
          </tfoot>
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
