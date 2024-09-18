@extends('layouts.dashboard')

@section('content')
<div>
    <canvas id="users-chart"></canvas>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/users-chart.js') }}"></script>
@endsection