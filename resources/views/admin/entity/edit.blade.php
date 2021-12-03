@extends('admin.admin_master')

@section('admin')
<div class="row">
   <link rel="stylesheet" href="https://www.bootstrapdash.com/demo/spica/template/css/vertical-layout-light/style.css">
     <link rel="stylesheet" href="{{ asset('template/css/style.css')}}">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="border-bottom text-center pb-4">
                        @if($entities->profile_pic)
                        <img src="{{ asset($entities->profile_pic) }}" alt="profile" class="img-lg rounded-circle mb-3"/>
                        @else
                        <img src="https://th.bing.com/th/id/OIP.BYlUhGXWlMNsV1FFUisMFAHaH7?pid=ImgDet&rs=1" alt="profile" class="img-lg rounded-circle mb-3"/>
                        @endif
                        <div class="mb-3">
                         <h3>{{ $entities->f_name }} {{ $entities->m_name }} {{ $entities->l_name }} </h3>
                          
                        </div>
                        <p class="w-75 mx-auto mb-3">Bureau Oberhaeuser is a design bureau focused on Information- and Interface Design. </p>
                        <div class="d-flex justify-content-center">
                          @if($entities->entity_type == 1)
                          <h5>Student</h5>
                          @else
                          <h5>Instructor</h5>
                          @endif
                        </div>
                      </div><h4 class="card-title">Course Enrolled</h4>
                      @foreach($courses as $course)
                      <div class="accordion accordion-bordered" id="accordion-2" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-bs-toggle="collapse" href="#collapse-{{ $course->id }}" aria-expanded="false" aria-controls="collapse-{{ $course->id }}" class="collapsed">
                              {{ $course->name }}
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-{{ $course->id }}" class="collapse" role="tabpanel" aria-labelledby="heading-4" data-bs-parent="#accordion-2" style="">
                          <div class="card-body">
                            <p class="mb-0"> Date Enrolled {{ $course->created_at }}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                      
                      <nav>
                    <ul class="pagination flex-wrap pagination-separated pagination-danger">
                       
                     {{ $courses->links() }} 
                     
                    </ul>
                  </nav>
                       
                       
                      <button class="btn btn-primary btn-block mb-2"><i class="mdi mdi-printer btn-icon-append"></i> Print Course Details</button>
                      <button class="btn btn-info btn-block mb-2"><i class="mdi mdi-printer btn-icon-append"></i> Print Information Details</button>

                    </div>
                    <div class="col-lg-8">
                      <div class="d-block d-md-flex justify-content-between mt-4 mt-md-0">
                        <div class="text-center mt-4 mt-md-0">
                          <button class="btn btn-outline-primary">C1</button>
                          <button class="btn btn-primary">C2</button>
                          <button class="btn btn-primary">C3</button>
                          <button class="btn btn-primary">C4</button>

                        </div>
                      </div>
                      <div class="mt-4 py-2 border-top border-bottom">
                        <ul class="nav profile-navbar">
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                              <i class="mdi mdi-account-outline"></i>
                              Info
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="#">
                              <i class="mdi mdi-newspaper"></i>
                              Feed
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                              <i class="mdi mdi-calendar"></i>
                              Agenda
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                              <i class="mdi mdi-attachment"></i>
                              Resume
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="profile-feed">
                         <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr class="bg-dark text-white">
                          <th colspan="4">
                           Personal Information

                          </th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            Surname
                          </td>
                          <td colspan="3">
                            <strong>{{ $entities->l_name }} </strong>
                          </td> 
                        </tr>
                        <tr>
                          <td>
                            Firstname
                          </td>
                          <td colspan="2" width="50%">
                            <strong>{{ $entities->f_name }} </strong>
                          </td>
                          <td>NAME EXTENSION: {{ $entities->suffix }}</td>             
                        </tr>
                          <tr>
                          <td>
                            Middle Name
                          </td>
                          <td colspan="3">
                            <strong>{{ $entities->m_name }}</strong>
                          </td>
                          </tr>
                          <tr>
                            <td width="20%">
                              Birthday<br>
                              (mm/dd/yyyy)
                            </td>
                            <td >
                             <strong> {{ $entities->birthdate }} </strong>
                            </td>
                            <td rowspan="3" width="20%">Citizenship<br>
                              <br><br><br><br><br><br><br><br>
                              If holder of  dual citizenship
                              
                            </td>
                            <td rowspan="2">
                              DSADsd
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Place of Birth
                            </td>
                            <td width="20%">
                            <strong>{{ $entities->birthplace }}</strong>
                            </td>
                          </tr>
                          <tr>
                            <td>
                             Sex
                            </td>
                            <td >
                             <strong>{{ $entities->sex }} </strong>
                            </td>
                            
                            <td >
                              DSADsd
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Civil Status<br><br><br>
                            </td>
                            <td >
                             <strong>{{ $entities->civil_status }}</strong>
                            </td>
                            <td rowspan="3">Residential Address<br>
                              <br><br><br><br><br><br><br><br><br><br>Zipcode
                              
                            </td>
                            <td >
                             House/Block/Lot No.:  <strong>{{ $entities->res_house }}</strong> <br>
                             Street: <strong>{{ $entities->res_street }}</strong><br>
                             Subdivision/Village: <strong>{{ $entities->res_subdivision }}</strong><br>
                             Brgy: <strong>{{ $entities->res_brgy }}</strong>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Height
                            </td>
                            <td >
                             <strong>{{ $entities->height }}</strong>
                            </td>
                            <td >
                              City/Municipality  <strong>{{ $entities->res_city }} </strong> <br>
                              Province: <strong>{{ $entities->res_province }}</strong><br>
                               
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Weight
                            </td>
                            <td >
                             <strong> {{ $entities->weight }} </strong>
                            </td>
                            <td >
                             {{ $entities->res_zipcode }} 
                               
                            </td>
                          </tr>
                          <tr>
                            <td>
                             Blood Type
                            </td>
                            <td >
                              <strong>{{ $entities->blood_type }} </strong>
                            </td>
                            <td rowspan="4">
                             Permanent Address<br>
                              <br><br><br><br><br><br><br><br><br><br>                              Zipcode
                               
                            </td>
                            <td rowspan="3">
                              House/Block/Lot No.:  <strong>{{ $entities->per_house }} </strong> <br>
                             Street: <strong>{{ $entities->per_street }} </strong><br>
                             Subdivision/Village: <strong>{{ $entities->per_subdivision }}  </strong><br>
                             Brgy: <strong>{{ $entities->per_brgy }} </strong><br>
                             City/Municipality: <strong>{{ $entities->per_city }} </strong><br>
                             Province: <strong>{{ $entities->per_province }} </strong>
                           </td>
                          </tr>
                          <tr>
                            <td>
                             GSID No.
                            </td>
                            <td >
                            <strong> {{ $entities->gsis_id }} </strong>
                            </td>
                             
                          </tr>
                          <tr>
                            <td>
                            Pagibig No.
                            </td>
                            <td >
                               
                            </td>
                             
                          </tr>
                          <tr>
                            <td>
                             Philhealth No.
                            </td>
                            <td >
                               <strong>{{ $entities->philhealth_no }}</strong>
                            </td>
                            <td >
                             <strong>{{ $entities->per_zipcode }}</strong>
                            </td>
                             
                          </tr>
                          <tr>
                            <td>
                            SSS No.
                            </td>
                            <td><strong>{{ $entities->sss_no }}</strong></td>
                            <td >
                               Telephone No
                            </td>
                            <td>dsdsd</td>
                             
                          </tr>
                          <tr>
                            <td>
                             Tin No.
                            </td>
                            <td><strong>{{ $entities->tin_no }}</strong></td>
                            <td >
                               Mobile No.
                            </td>
                            <td><strong>{{ $entities->mobile }}</strong></td>

                            
                             
                          </tr>
                          <tr>
                            <td>
                             Agency Employee No.
                            </td>
                            <td >
                               <strong>{{ $entities->agency_employee_no }}</strong>
                            </td>

                            <td >
                               Email Address
                            </td>
                            <td><strong>{{ $entities->email }}</strong></td>
                             
                          </tr>


                          
                          
                     

                         
                          
                      </tbody>
                    </table>
                  </div>
                        
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endsection