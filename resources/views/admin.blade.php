@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Number of Users</h5>
                    <p class="card-text">{{ $numUsers }}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Number of Stations</h5>
                    <p class="card-text">{{ $numStations }}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Number of Roles</h5>
                    <p class="card-text">{{ $numRoles }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
