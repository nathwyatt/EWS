@extends('layouts.dashboard')

@section('content')
<style>
.card-deck .card {
    margin-bottom: 0;
}

.card-green {
    background-color: #28a745;
    color: #fff;
}

.card-orange {
    background-color: #fd7e14;
    color: #fff;
}

.card-body {
    padding: 10px;
}

.card-footer {
    padding: 10px;
}
</style>

<div class="container">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">EWS Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-4">
                <div class="card-deck">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-users" aria-hidden="true"></i><br>
                            <small>Members</small>
                            <p>{{$numUsers}}</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{route('users.index')}}">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-deck">
                    <div class="card card-green">
                        <div class="card-body text-center">
                            <i class="fa fa-tasks" aria-hidden="true"></i><br>
                            <small>Station</small>
                            <p>{{$numStations}}</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('stations.index') }}">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-deck">
                    <div class="card card-orange">
                        <div class="card-body text-center">
                            <i class="fa fa-users" aria-hidden="true"></i><br>
                            <small>Farmers</small>
                            <p>20</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
