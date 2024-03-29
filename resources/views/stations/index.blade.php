@extends('layouts.dashboard')

@section('content')

<div class="card card-table-border-none dt-responsive nowrap" style="width:100%" id="recent-orders">
    <div class="card-header justify-content-between text-center">
        <h2 style="font-family: 'Bayon'">Station Management</h2>
        <div class="date-range-report">
            <span></span>
        </div>
    </div>
    <div class="pull-left">
        <a href="{{ route('stations.create') }}" class="dropdown-item">
            <i class="nav-icon fas fa-user-plus"></i> Add
        </a>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="card-body pt-0 pb-5">
        <div class="table-responsive">
            <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Station(id)</th>
                        <th>Name</th>
                        <th>Sector</th>
                        <th>Manager</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stations as $station)
                    <tr>
                        <td>{{ $station->id }}</td>
                        <td>{{ $station->name }}</td>
                        <td>{{ $station->sector->name }}</td>
                        <td>{{ $station->user->name }}</td>
                        <td>
                            <form action="{{ route('stations.destroy', $station->id) }}" method="POST">
                                <a class="badge badge-success nav-icon fas fa-view"
                                    href="{{ route('stations.show', $station->id) }}">Show</a>
                                <div class="dropdown show d-inline-block widget-dropdown">
                                    <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                        id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" data-display="static"></a>
                                    <ul class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="dropdown-recent-order1">
                                        <li class="dropdown-item">
                                            <a href="{{ route('stations.edit', $station->id) }}">Edit</a>
                                        </li>
                                        <li class="dropdown-item">
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy',
                                            $station->id], 'style' => 'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            responsive: true,
            lengthChange: false,
            autoWidth: false,
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print', 'colvis'
            ]
        }).buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');
    });
</script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
@endsection
