@extends('layouts.stations')
@section('content')
<div class="row">
    <h1  class="btn btn-badge rounded-pill bg-white text-center">   {{ Auth::user()->station->name }}</h1>

<section class="intro">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="card mask-custom">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-borderless text-dark mb-0 ">
                      <thead>
                        <tr>
                          <th scope="col" >Water level</th>
                          <th scope="col" >Temperature</th>
                          <th scope="col" >Hummidity</th>
                          <th scope="col" >Soil moisture</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            @foreach ($data as $key)
                          <th >{{ $key->water_level }}</th>
                          <td>{{ $key->temperature }}</td>
                          <td>{{ $key->hummidity }}</td>
                          <td>{{ $key->soil_moisture }}</td>
                          @endforeach
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
     </section>
  </div>
@endsection