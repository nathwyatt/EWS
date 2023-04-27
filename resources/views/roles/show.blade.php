@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="card card-table-border-none dt-responsive nowrap" style="width:100%" id="recent-orders">

<div class="row">
  
     <div class="col-lg-12 margin-tb">
        <div class="card-header bg-light justify-content-between text-center">
            <h2>{{$role->name }} </h2>
            <div class="date-range-report ">
             <span></span>
            </div>
      </div>
                <div class="pull-right">
                    <a class="badge  badge-primary" href="{{ route('roles.index') }}"> Back</a>
                </div>
         </div>
 
<div class="container">
    <div class="card1">
     <div>
     <div class="job">
         <div class="form-group">
             <strong>Role:</strong>
             {{ $role->name }}
         </div>
     </div>
    
     <div class="job">
         <div class="form-group">
            <strong>Permissions:</strong>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="label label-success">{{ $v->name }},</label>
                @endforeach
            @endif
    </div>
 </div>
 </div>
     </div>
    
   </div>
</div>
@endsection