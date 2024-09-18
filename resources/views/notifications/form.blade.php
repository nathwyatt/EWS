@extends('layouts.dashboard')

@section('content')
<div class="card card-table-border-none dt-responsive nowrap" style="width:100%" id="recent-orders">
    <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="card-header bg-light justify-content-between text-center">
            <h2>notification form  </h2>
            <div class="date-range-report ">
             <span></span>
            </div>
      </div>
                <div class="pull-right">
                    <a class="badge  badge-primary" href="{{('/home') }}"> Back</a>
                </div>
         </div>
</div>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form method="POST" action="/notifications">
            @csrf
            <div class="container">
            <div class="form-group">
                <label for="greeting">Greeting:</label>
                <input type="text" class="form-control" id="greeting" name="greeting" value="{{ old('greeting') }}" required>
            </div>
            <div class="form-group">
                <label for="body">Body:</label>
                <textarea class="form-control" id="body" name="body" required>{{ old('body') }}</textarea>
            </div>
            <div class="form-group">
                <label for="actiontext">Action Text:</label>
                <input type="text" class="form-control" id="actiontext" name="actiontext" value="{{ old('actiontext') }}" required>
            </div>
            <div class="form-group">
                <label for="actionurl">Action URL:</label>
                <input type="text" class="form-control" id="actionurl" name="actionurl" value="{{ old('actionurl') }}" required>
            </div>
            <div class="form-group">
                <label for="lastline">Last Line:</label>
                <input type="text" class="form-control" id="lastline" name="lastline" value="{{ old('lastline') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div>
    </div>
    
@endsection
