@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="card card-table-border-none dt-responsive nowrap" style="width:100%" id="recent-orders">

<div class="row">
  
     <div class="col-lg-12 margin-tb">
        <div class="card-header bg-light justify-content-between text-center">
            <h2>{{$user->name }} Information</h2>
            <div class="date-range-report ">
             <span></span>
            </div>
      </div>
                <div class="pull-right">
                    <a class="badge  badge-primary" href="{{ route('users.index') }}"> Back</a>
                </div>
         </div>
         
<div class="container">
   <div class="card1">
    <div class="card1-border-top">
    </div>
    <div class="img">
        <img src="/avatars/{{$user->avatar}}" class="user-image  img-circle mr-3"width="90px"height="90px" alt="User Image" />
    </div>
    <span> user</span>
    
    <div>
    <div class="job">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $user->name }}
        </div>
    </div>
    <div class="job">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $user->email }}
        </div>
    </div>
    <div class="job">
        <div class="form-group">
            <strong>Roles:</strong>
            @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
            <span class=" badge rounded-pill bg-dark">{{ $v }}</span>
        @endforeach
    @endif
   </div>
</div>
</div>
    </div>
   
  </div>
 </div>
 
</div>
@endsection