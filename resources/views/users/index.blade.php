@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="card card-table-border-none dt-responsive nowrap" style="width:100%" id="recent-orders">
            <div class="card-header justify-content-between text-center">
                <h2 style="font-family: 'Bayon'">Users Management</h2>
                <div class="date-range-report">
                    <span></span>
                </div>
            </div>
            <div class="pull-left">
                <a href="{{ route('users.create') }}" class="dropdown-item">
                    <i class="nav-icon fas fa-user-plus"></i> Add
                </a>
            </div>

            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            <div class="card-body pt-0 pb-5">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>User(id)</th>
                            <th>Names</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if(!empty($user->getRoleNames()))
                                @foreach($user->getRoleNames() as $v)
                                <span class="badge rounded-pill bg-warning">{{ $v }}</span>
                                @endforeach
                                @endif
                            </td>
                            <td>
                                <a class="badge badge-success nav-icon fas fa-view"
                                    href="{{ route('users.show',$user->id) }}">Show</a>

                                @can('user-create')
                                <div class="dropdown show d-inline-block widget-dropdown">
                                    <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                        id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" data-display="static"></a>
                                    <ul class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="dropdown-recent-order1">
                                        <li class="dropdown-item">
                                            <a href="{{ route('users.edit',$user->id) }}">edit</a>
                                        </li>
                                        <li class="dropdown-item">
                                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy',
                                            $user->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        </li>
                                    </ul>
                                </div>
                                @endcan
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {!! $data->render() !!}
    <p class="text-center text-primary"><small>Aime-Wyatt</small></p>
</div>
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example1').DataTable({
            responsive: true,
            paging: true,
            pageLength: 5
        });
    });

</script>
@endpush
