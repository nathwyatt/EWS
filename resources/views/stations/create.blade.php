@extends('layouts.dashboard')
  
@section('content')
<div class="card card-table-border-none dt-responsive nowrap" style="width:100%" id="recent-orders">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="card-header justify-content-between text-center">
                <h2>Register new station </h2>
                <div class="date-range-report">
                    <span></span>
                </div>
            </div>
            <div class="pull-right">
                <a class="badge badge-primary" href="{{ route('stations.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   
    <form action="{{ route('stations.store') }}" method="POST">
        @csrf
        <div class="container">
            <div class="col-lg-12">
                <div class="card card-default bg-light">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>details:</strong>
                                <textarea type="text" name="details" class="form-control" placeholder="details"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Province:</strong>
                                <select name="province_id" id="province" class="form-control">
                                    @foreach($province as $pro)
                                        <option value="{{$pro->id}}">{{$pro->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>District:</strong>
                                <select name="district_id" id="district" class="form-control">
                                    <!-- We'll populate this dropdown dynamically -->
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Sector:</strong>
                                <select name="sector_id" id="sector" class="form-control">
                                    <!-- We'll populate this dropdown dynamically -->
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Cell:</strong>
                                <select name="cell_id" id="cell" class="form-control">
                                    <!-- We'll populate this dropdown dynamically -->
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Village:</strong>
                                <select name="village_id" id="village" class="form-control">
                                    <!-- We'll populate this dropdown dynamically -->
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <select class="form-select form-select-lg mb-3" id="district"></select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select form-select-lg mb-3" id="sector"></select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select form-select-lg mb-3" id="cell"></select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select form-select-lg mb-3" id="village"></select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Manager:</strong>
                                <select name="user_id" class="form-control">
                                    @foreach($managers as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#province').on('change', function () {
            var provinceId = this.value;
            $('#district').html('');
            $('#sector').html('');
            $('#cell').html('');
            $('#village').html('');

            $.ajax({
                url: '{{ route('get-districts') }}',
                type: 'get',
                data: { province_id: provinceId },
                success: function (res) {
                    $('#district').html('<option value="">Select district</option>');
                    $.each(res, function (key, value) {
                        $('#district').append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                }
            });
        });

        $('#district').on('change', function () {
            var districtId = this.value;
            $('#sector').html('');
            $('#cell').html('');
            $('#village').html('');

            $.ajax({
                url: '{{ route('get-sectors') }}',
                type: 'get',
                data: { district_id: districtId },
                success: function (res) {
                    $('#sector').html('<option value="">Select sector</option>');
                    $.each(res, function (key, value) {
                        $('#sector').append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                }
            });
        });

        $('#sector').on('change', function () {
            var sectorId = this.value;
            $('#cell').html('');
            $('#village').html('');

            $.ajax({
                url: '{{ route('get-cells') }}',
                type: 'get',
                data: { sector_id: sectorId },
                success: function (res) {
                    $('#cell').html('<option value="">Select cell</option>');
                    $.each(res, function (key, value) {
                        $('#cell').append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                }
            });
        });

        $('#cell').on('change', function () {
            var cellId = this.value;
            $('#village').html('');

            $.ajax({
                url: '{{ route('get-villages') }}',
                type: 'get',
                data: { cell_id: cellId },
                success: function (res) {
                    $('#village').html('<option value="">Select village</option>');
                    $.each(res, function (key, value) {
                        $('#village').append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                }
            });
        });
    });
</script>
@endsection
