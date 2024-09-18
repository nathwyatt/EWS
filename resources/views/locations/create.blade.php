@extends('layouts.app')

@section('content')
{{ Form::open(['route' => 'locations.store']) }}

{{ Form::label('district_id', 'District') }}
{{ Form::select('district_id', $districts, null, ['placeholder' => 'Select district']) }}

{{ Form::label('sector_id', 'Sector') }}
{{ Form::select('sector_id', [], null, ['placeholder' => 'Select sector']) }}

{{ Form::label('cell_id', 'Cell') }}
{{ Form::select('cell_id', [], null, ['placeholder' => 'Select cell']) }}

{{ Form::label('village_id', 'Village') }}
{{ Form::select('village_id', [], null, ['placeholder' => 'Select village']) }}

{{ Form::submit('Submit') }}

{{ Form::close() }}

@endsection