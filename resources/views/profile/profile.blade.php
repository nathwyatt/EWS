@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="content">
        <div class="bg-white border rounded">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="profile-content-left profile-left-spacing pt-5 pb-3 px-3 px-xl-5">
                        <div class="card text-center widget-profile px-0 border-0">
                            <div class="card-img mx-auto mt-4" style="width: 150px; height: 150px; overflow: hidden; border-radius: 50%;">
                                <img class="img-fluid" src="/avatars/{{ Auth::user()->avatar }}" alt="profile picture" style="object-fit: cover; width: 100%; height: 100%;">
                            </div>
                            <div class="card-body">
                                <h4 class="py-2 text-dark">{{ Auth::user()->name }}</h4>
                                @if(!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $v)
                                        <span class="badge"style=" background-color: #1d9d6e;">{{ $v }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="profile-content-right profile-right-spacing pt-5 pb-3 px-3 px-xl-5">
                        <!-- Combined Update Form -->
                        <div class="row justify-content-center">
                            <div class="col-md-12"> <!-- Adjust column width as needed -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="py-2 text-dark">Update Profile</h4>
                                        <form action="/profile/{user}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <!-- Profile Picture Update -->
                                            <div class="form-group mb-3">
                                                <label for="avatar">Profile Picture</label>
                                                <input type="file" class="form-control-file" name="avatar" id="avatar">
                                            </div>

                                            <!-- Username Update -->
                                            <div class="form-group mb-3">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" name="username" id="username" value="{{ Auth::user()->name }}" required>
                                            </div>

                                            <!-- Password Update -->
                                            <div class="form-group mb-3">
                                                <label for="current_password">Current Password</label>
                                                <input type="password" class="form-control" name="current_password" id="current_password" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="new_password">New Password</label>
                                                <input type="password" class="form-control" name="new_password" id="new_password" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="confirm_password">Confirm New Password</label>
                                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" required>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Update Profile</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Content -->
</div> <!-- End Content Wrapper -->
@endsection
