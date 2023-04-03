@extends('layouts.stations')
@section('content')
    
<div class="container">
<section class="vh-100 gradient-custom">
    <div class="col-lg-12 margin-tb-dark">
        <div class="pull-left">
            <h2>register new person</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-dark" href="{{ route('community.index') }}"> Back</a>
        </div>
    </div>
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
              <form action="{{ route('community.store') }}" method="POST">
  @csrf
                <div class="row">
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="text" id="fname" class="form-control form-control-lg" />
                      <label class="form-label" for="firstName">First Name</label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="text" id="lname" class="form-control form-control-lg" />
                      <label class="form-label" for="lastName">Last Name</label>
                    </div>
  
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
  
                    {{-- <div class="form-outline datepicker w-100">
                      <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                      <label for="birthdayDate" class="form-label">Birthday</label>
                    </div> --}}
  
                  </div>
                  <div class="col-md-6 mb-4 ">
  
                    <h6 class="mb-2 pb-1">Gender: </h6>
  
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                        value="option1" checked />
                      <label class="form-check-label" for="femaleGender">Female</label>
                    </div>
  
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                        value="option2" />
                      <label class="form-check-label" for="maleGender">Male</label>
                    </div>
  
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                        value="option3" />
                      <label class="form-check-label" for="otherGender">Other</label>
                    </div>
  
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="email" id="email" class="form-control form-control-lg" />
                      <label class="form-label" for="emailAddress">Email</label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="tel" id="phone" class="form-control form-control-lg" />
                      <label class="form-label" for="phoneNumber">Phone Number</label>
                    </div>
  
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-12">
  
                    <select class="select form-control-lg">
                        @foreach($station as $key)
                        <option value="{{$key->id}}">{{$key->name}} </option>
                        @endforeach
                    </select>
                    <label class="form-label select-label">Choose station</label>
  
                  </div>
                </div>
  
                <div class="mt-4 pt-2">
                  <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                </div>
  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection