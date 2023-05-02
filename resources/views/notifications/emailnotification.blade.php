@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Notification Form</h1>
        <div class="container">
        <form method="POST" action="/notifications">
            @csrf
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
        </form>
        </div>
    </div>
@endsection
