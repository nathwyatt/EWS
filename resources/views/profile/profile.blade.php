@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content">
        <div class="bg-white border rounded">
            <div class="row no-gutters">
                <div class="col-lg-4 col-xl-3">
                    <div class="profile-content-left profile-left-spacing pt-5 pb-3 px-3 px-xl-5">
                        <div class="card text-center widget-profile px-0 border-0">
                            <div class="card-img mx-auto rounded-circle ">
                                <img class="rounded-circle mt-4 img-size-50" src="/avatars/{{ Auth::user()->avatar }}" alt="profile picture">
                            </div>

                            <div class="card-body">
                                <h4 class="py-2 text-dark">{{ Auth::user()->name }}</h4>
                                <p>{{ Auth::user()->email }}</p>
                                <a class="btn btn-primary btn-pill btn-lg my-4" href="#">Follow</a>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between ">
                            <div class="text-center pb-4">
                                <h6 class="text-dark pb-2">1503</h6>
                                <p>Friends</p>
                            </div>

                            <div class="text-center pb-4">
                                <h6 class="text-dark pb-2">2905</h6>
                                <p>Followers</p>
                            </div>

                            <div class="text-center pb-4">
                                <h6 class="text-dark pb-2">1200</h6>
                                <p>Following</p>
                            </div>
                        </div>

                        <hr class="w-100">
                    </div>
                </div>

                <div class="col-lg-8 col-xl-9">
                    <div class="container">
                        <div class="profile-content-right profile-right-spacing py-5">
                            <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="timeline-tab" data-toggle="tab" href="#timeline" role="tab" aria-controls="timeline" aria-selected="true">Timeline</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
                                </li>
                            </ul>
                            <div class="pull-right">
                                <a class="badge  badge-primary" href="{{'home'}}"> Back</a>
                            </div>
                        </div>
                        <div class="container">
                            <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                <div class="tab-pane-content mt-5">
                                    <form action="{{ route('profile.update', $user->id) }}" method="POST">
                                        <div class="container">
                                            @csrf
                                            <div class="form-group row mb-6">
                                                <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User Image</label>
                                                <div class="col-sm-8 col-lg-10">
                                                    <form action="/upload" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="file" name="avatar">
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-6">
                                                <label for="name" class="col-sm-4 col-lg-2 col-form-label">Full Name</label>
                                                <div class="col-sm-8 col-lg-10">
                                                    <div class="custom-file mb-1">
                                                        <input type="text" class="form-control" id="name" value="{{ Auth::user()->name }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-6">
                                                <label for="email" class="col-sm-4 col-lg-2 col-form-label">Email</label>
                                                <div class="col-sm-8 col-lg-10">
                                                    <div class="custom-file mb-1">
                                                        <input type="email" class="form-control" id="email" value="{{ Auth::user()->email }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-6">
                                                <label for="newpassword" class="col-sm-4 col-lg-2 col-form-label">New Password</label>
                                                <div class="col-sm-8 col-lg-10">
                                                    <div class="custom-file mb-1">
                                                        <input type="password" class="form-control" id="password" value="newpassword">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-6">
                                                <label for="conpassword" class="col-sm-4 col-lg-2 col-form-label">Confirm Password</label>
                                                <div class="col-sm-8 col-lg-10">
                                                    <div class="custom-file mb-1">
                                                        <input type="password" class="form-control" id="confirm-password" value="conPassword">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-end mt-5">
                                                <button type="submit" class="btn btn-primary mb-2 btn-pill">Update Profile</button>
                                            </div>
                                        </div>
                                    </form>
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

