@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>stations</h2>
            </div>
            <div class="pull-right">
                @can('station-create')
                <a class="btn btn-success" href="{{ route('stations.create') }}"> Create New Station</a>
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
            <th>No</th>
            <th>Name</th>
            <th>district</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($stations as $station)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $station->name }}</td>
            <td>{{ $station->district }}</td>
            <td>
                <form action="{{ route('stations.destroy',$station->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('stations.show',$station->id) }}">Show</a>
                    @can('station-edit')
                    <a class="btn btn-dark" href="{{ route('stations.edit',$station->id) }}">Edit</a>
                    @endcan
                    @csrf
                    @method('DELETE')
                    @can('stations-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $stations->links() !!}
    <p class="text-center text-dark"><small>Aime-Wyatt</small></p>
@endsection