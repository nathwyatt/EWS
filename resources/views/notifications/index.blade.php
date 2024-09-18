@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h2>All Notifications</h2>
        <p>Notifications </p>

        <!-- Button to navigate to notifications.form page -->
        <a href="{{ route('notifications.form') }}" class="badge badge-primary mb-3">Send Notification</a>

        @if ($notifications->isEmpty())
            <p>No notifications found.</p>
        @else
            <div class="list-group">
                @foreach ($notifications as $notification)
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            {{-- Check if 'title' key exists in the data array --}}
                            @if (isset($notification->data['title']))
                                <h5 class="mb-1">{{ $notification->data['title'] }}</h5>
                            @else
                                <h5 class="mb-1">Untitled Notification</h5>
                            @endif
                            <small>{{ $notification->created_at->diffForHumans() }}</small>
                        </div>
                        <form action="{{ route('notifications.clear', $notification->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="badge badge-danger">Clear</button>
                        </form>
                        @if (isset($notification->data['message']))
                            <p class="mb-1">{{ $notification->data['message'] }}</p>
                        @else
                            <p class="mb-1">No message available</p>
                        @endif
                        {{-- Add additional data fields if needed --}}
                    </a>
                @endforeach
            </div>
            {{-- Add pagination if necessary --}}
            {{-- $notifications->links() --}}
        @endif
    </div>
@endsection
