@extends('layouts.dashboard')

@section('content')
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
            <div class="col-lg-12">
                <div class="cpanel">
                    <div class="icon-part">
                        <i class="fa fa-users" aria-hidden="true"></i><br>
                        <small>Members</small>
                        <p>{{$numUsers}}</p>
                    </div>
                    <div class="card-content-part">
                        <a href="{{route('users.index')}}">More Details</a>
                    </div>
                </div>
                <div class="cpanel cpanel-green">
                    <div class="icon-part">
                        <i class="fa fa-tasks" aria-hidden="true"></i><br>
                        <small>Station</small>
                        <p>{{$numStations}}</p>
                    </div>
                    <div class="card-content-part">
                        <a href="{{ route('stations.index') }}">More Details</a>
                    </div>
                </div>
                <div class="cpanel cpanel-orange">
                    <div class="icon-part">
                        <i class="fa fa-users" aria-hidden="true"></i><br>
                        <small>Farmers</small>
                        <p>20</p>
                    </div>
                    <div class="card-content-part">
                        <a href="#">More Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
