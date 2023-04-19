@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-badge  bg-dark text-center">
                <h2>stations Management</h2>
            </div>
            <div class="pull-right">
                @can('station-create')
                <a class="btn btn-badge rounded-pill bg-dark" href="{{ route('stations.create') }}"> Create New station</a>
                @endcan
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Station(id)</th>
            <th>Name</th>
            <th>sector</th>
            <th>Manager</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($stations as $station)
        <tr>
            <td>{{$station->id }}</td>
            <td>{{$station->name}}  </td>
            <td>{{$station->sector->name }}</td>
            <td>{{$station->user->name}} </td>
            <td>
                <form action="{{ route('stations.destroy',$station->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('stations.show',$station->id) }}">Show</a>
                    @can('station-edit')
                    <a class="btn btn-primary" href="{{ route('stations.edit',$station->id) }}">Edit</a>
                    @endcan
                    @csrf
                    @method('DELETE')
                    @can('station-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{-- {!! $stations->links() !!} --}}
   
@endsection