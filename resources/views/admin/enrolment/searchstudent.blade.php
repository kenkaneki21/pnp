@extends('admin.admin_master')

@section('admin')
      <div class="row">
            <div class="col-12 col-xl-5 grid-margin stretch-card">
              <div class="row w-100 flex-grow">
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">Courses</p>
                      <p class="text-muted">Showing of total number of student per Course</p>
                      <div class="table-responsive">
                      <table class="table table-hover" id="studentresult">
                      <thead>
                      
                        <tr>
                           
                          <th>Name</th>
                          <th>Enrolled</th>
                           <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                         
                             @foreach($courses as $course)
                            <tr>
                             
                            <td>{{ $course->name}} </td>
                            <td>   <label class="badge badge-success">{{ $course->total}}</label></td>
                            <td>
                               <button class="btn btn-xs "><i class="mdi mdi-eye text-danger"></i></button>  
                            </td>
                             
                            </tr>
                            @endforeach
                      
                      </tbody>
                    </table>
                      </div>
                      
                       
                    </div>
                  </div>
                </div>
                 
                
              </div>
            </div>
            <div class="cl-12 col-xl-7 grid-margin stretch-card">
              <div class="row w-100 flex-grow">
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                     
                       <p class="card-title">Search Student</p>
                      <form action="{{ route('student.search') }}" method="post">
                      {{ csrf_field() }}
                      <div class="input-group col-xs-12">
                        
                        <input type="text" class="form-control file-upload-info" name="search"  placeholder="Search Student Last Name">
                        <span class="input-group-append">
                          <button type="submit" class="file-upload-browse btn btn-primary" type="button">Search</button>
                        </span>
                     
                        
                      </div>
                       </form><hr>
                       <div class="table-responsive">
                     <table class="table table-hover" id="studentresult">
                      <thead>
                        <tr class="bg-dark text-white">
                          <th></th>
                          <th>Full Name</th>
                          <th width="40%">Details</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if($entities)
                          @foreach($entities as $entity)
                            <tr>
                            <td style="">
                            @if($entity->profile_pic)
                             <img src="{{ asset($entity->profile_pic)}}" width="50px" alt="profile"/> 
                            @else
                             <img src="{{ asset('template/images/faces/face5.jpg')}}" width="50px" alt="profile"/> 
                             @endif
                           </td>
                            <td >{{ $entity->f_name}} {{ $entity->m_name}} {{ $entity->l_name}} </td>
                            <td>   
                               <b>{{ $entity->mobile }}</b> 
                               <br>{{ $entity->res_zipcode .', '.$entity->res_provice .','. $entity->res_city }}  
                           </td>
                            
                                 
                            
                            <td ><a href="{{ url('entity/enroll/'.$entity->id)}}" class="btn btn-primary btn-sm">Enroll</a> 
                            </td>
                            </tr>
                            @endforeach
                          @endif
                        
                      </tbody>
                    </table>
                  </div>
                       
                     

                     </div>
                  </div>
                </div>
                
                
              </div>
            </div>
          </div>
           
       
           
          <!-- row end -->
          @endsection