@extends('admin.admin_master')

@section('admin')
<div class="row">
            <div class="col-12">
              <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Entities Registered Today</h4>
                      <div class="d-flex justify-content-between">
                        <p class="text-muted">#</p>
                        <p class="text-muted"><h2>
                          @if($newlatest)
                        {{ $newlatest }}</h2></p>
                        @endif
                      </div>
                      <div class="progress progress-md">
                        <div class="progress-bar bg-info w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Total of Student</h4>                      
                      <div class="d-flex justify-content-between">
                        <p class="text-muted">#</p>
                        <p class="text-muted"><h2>{{ $student }}</h2></p>
                      </div>
                      <div class="progress progress-md">
                        <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Total of Instructor</h4>
                      <div class="d-flex justify-content-between">
                        <p class="text-muted">#</p>
                        <p class="text-muted"><h2>{{ $instructor }}</h2></p>
                      </div>
                      <div class="progress progress-md">
                        <div class="progress-bar bg-danger w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Total Courses</h4>
                      <div class="d-flex justify-content-between">
                        <p class="text-muted">#</p>
                        <p class="text-muted"><h2>{{ $course }}</h2></p>
                      </div>
                      <div class="progress progress-md">
                        <div class="progress-bar bg-warning w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
 
     
             @endsection
