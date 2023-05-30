@extends('layouts.stations')
@section('content')

<div class="row mb-2">
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-left">
      <h1 class="breadcrumb-item">{{Auth::user()->station->name}}</h1>
    </ol>
  </div><!-- /.col -->
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Dashboard </li>
    </ol>
  </div><!-- /.col -->
</div><!-- /.row -->

<div class="card card-table-border-none dt-responsive nowrap" style="width:100%" id="recent-orders"> 
  <div class="card-header justify-content-between bg-light text-center">
    <h2>Farmers Management</h2>
    <div class="date-range-report">
      <span></span>
    </div>
  </div>

  <div class="pull-left">
    <a href="{{ route('community.create') }}" class="dropdown-item">
      <i class="nav-icon fas fa-user-plus "></i> Add
    </a>
  </div>

  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <div class="small-box bg-white">
    <a href="{{'/community'}}" class="badge bg-white text-center">farmers around {{ Auth::user()->station->name }}</a>
    <div class="container">
      <div class="table-responsive">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>id</th>
              <th>name</th>
              <th>surname</th>
              <th>Email</th>
              <th>phone</th>
              <th>station</th>
              <th>Action</th>
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
                <td>
                  <form action="{{ route('community.destroy',$data->id) }}" method="POST">
                    <a class="badge badge-success nav-icon fas fa-view" href="{{ route('community.show',$data->id) }}">Show</a>
                    <td class="text-right">
                      <div class="dropdown show d-inline-block widget-dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                          <li class="dropdown-item">
                            <a href="{{ route('community.edit',$data->id) }}">edit</a>
                          </li>
                          <li class="dropdown-item">
                            {!! Form::open(['method' => 'DELETE','route' => ['community.destroy', $data->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                          </li>
                        </ul>
                      </div>
                    </td>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>id</th>
              <th>name</th>
              <th>surname</th>
              <th>Email</th>
              <th>phone</th>
              <th>station</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
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