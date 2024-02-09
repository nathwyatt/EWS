@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="row">
     
        <div class="card card-table-border-none dt-responsive nowrap" style="width:100%" id="recent-orders">
          
            <div class="card-header justify-content-between text-center">
               <h2 style="font-family: 'Bayon'">Role Management</h2>
               <div class="date-range-report ">
                <span></span>
               </div>
         </div>
         <div class="pull-left">
            <a href="{{ route('roles.create') }}"class="dropdown-item"> 
              <i class="nav-icon fas fa-user-plus "></i> Add </a>
            </div>
    
               @if ($message = Session::get('success'))
              <div class="alert alert-success">
                <p>{{ $message }}</p>
              </div>
               @endif
          <div class="card-body pt-0 pb-5">
           <table id="responsive-data-table" class="table dt-responsive nowrap" style="width:100%">
             <tr>
    <tr>
        <th>Role(id)</th>
        <th>Role(name)</th>
        <th>Action</th>
    </tr>
    
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ $role->id }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="badge badge-success nav-icon fas fa-view" href="{{ route('roles.show',$role->id) }}">Show</a>
            
                @can('user-create')
                <td class="text-right">
                 <div class="dropdown show d-inline-block widget-dropdown">
                     <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                     <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                      <li class="dropdown-item">
                        <a href="{{ route('roles.edit',$role->id) }}">edit</a>
                      </li>
                      <li class="dropdown-item">
                    
                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                       {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                       {!! Form::close() !!}
                      </li>
                    </ul>
                  </div>
              </td>
          @endcan 
      </tr>
@endforeach
</table>
</div>
</div>
</div>

{{-- {!! $role->render() !!} --}}
<p class="text-center text-primary"><small>Aime-Wyatt</small></p>
</div>
@endsection