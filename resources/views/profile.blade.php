
@extends('layouts.stations')
@section('content')
    
<div class="container "> 
    <div class="row"> 
    <div class="col-md-3 border-right"> 
        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <img class="rounded-circle mt-5 img-size-50" src="/avatars/{{ Auth::user()->avatar }}">
            <span class="font-weight-bold">{{Auth::user()->name}}</span><span class="text-black-50">{{Auth::user()->email}}</span>
            
            <span>
             </span>
            </div> 
        </div>
         <div class="col-md-5 border-right">
             <div class="p-3 py-5">
                 <div class="d-flex justify-content-between align-items-center mb-3"> 
                     <h4 class="text-right">Profile Settings</h4> 
                </div> 
            <div class="row mt-2">
                          <div class="col-md-12">
                         <label class="labels">Names</label>
                         <input type="text" name="name"class="form-control" placeholder="names" value="">
                         </div>
                          {{-- <div class="col-md-6"><label class="labels">Surname</label>
                         <input type="text" class="form-control" value="" placeholder="surname">
                         </div> 
                         </div>
                          <div class="row mt-3">
                              <div class="col-md-12">
                                  <label class="labels">PhoneNumber</label><input type="text" class="form-control" placeholder="enter phone number" value="">
                                  </div> --}}
            <div class="col-md-12">
            <label class="labels">Address</label>
            <input type="text" name="email"class="form-control" placeholder="enter address" value="">
            </div>
            <div class="col-md-12">
                <label class="labels"></label>
            </div>
            <div class="col-md-12">
                <label class="labels">profile photo</label>
                <input type="file" name="avatar">
            </div> 
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
        </div> 
        </div>
        </div>
        <div class="col-md-4"> 
        <div class="p-3 py-5"> 
        <div class="d-flex justify-content-between align-items-center experience">
      
    </div> 
    </div> 
    </div>
</div>
</div>
</div>
@endsection