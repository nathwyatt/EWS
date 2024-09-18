@extends('layouts.stations')

@section('content')

<div class="container mt-5">
    <div class="card-header justify-content-between text-center">
        <div class="d-flex justify-content-between align-items-center">
            <h2 style="font-family: 'Bayon'">Notification history</h2>
            <a class="btn btn-dark" href="{{ route('send.sms') }}">Notify</a>
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="pull-right">
        <a class="badge badge-primary" href="{{ route('home') }}"> Back</a>
    </div>
    <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Message</th>
                <th>Phone Number</th>
                <th>Status</th>
                <th>From</th>
                <th>Channel</th>
                <th>Sent At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notifications as $notification)
                <tr>
                    <td>{{ $notification->id }}</td>
                    <td>{{ $notification->message }}</td>
                    <td>{{ $notification->phone_number }}</td>
                    <td>{{ $notification->status }}</td>
                    <td>{{ $notification->from }}</td>
                    <td>{{ $notification->channel }}</td>
                    <td>{{ $notification->created_at }}</td>
                    <td>
                        <form action="{{ route('notifications.delete', $notification->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this notification?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            responsive: true,
            dom: 'Bfrtip',
            buttons: [
                'colvis'
            ]
        });

        $('#deleteForm').on('submit', function(e) {
            if (!confirm('Are you sure you want to delete the selected notifications?')) {
                e.preventDefault();
            }
        });
    });
</script>
@endsection
