@extends('layouts.stations')

@section('content')
    
    <div class="card-header justify-content-between text-center">
        <h2>Notifications on {{Auth::user()->station->name}} station</h2>
        <div class="date-range-report ">
         <span></span>
        </div>
  </div>
  <div class="card-body pt-0 pb-5">
    @if (count($notifications) > 0)
        <ul>
            @foreach ($notifications as $notification)
                <li>new data created </li>
                <li>{{ $notification->data['temperature'] }}</li>
                <li>{{ $notification->data['water_level'] }}</li>
                <li>{{ $notification->data['hummidity'] }}</li>
            @endforeach
        </ul>
    @else
        <p>No new notifications</p>
    @endif
  </div>
@endsection
