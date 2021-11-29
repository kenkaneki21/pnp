@extends('admin.admin_master')

@section('admin')


      <div class="row">
            
             
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  
                  <h4 class="card-title">REGISTER ENTITY</h4>
                  <span id="result"></span>
<form  method="post" id="registerform" enctype="multipart/form-data">
  @csrf

                  <ul class="nav nav-pills" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">PERSONAL INFO</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">FAMILY BACKGROUND</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">CHILDREN</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab1" data-bs-toggle="pill" data-bs-target="#pills-contact1" type="button" role="tab" aria-controls="pills-contact1" aria-selected="false">EDUCATIONAL BACKGROUND</button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <br>
                     <center> <h3>PERSONAL DATA SHEET</h3></center>
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Profile Picture</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control" name="profile_pic"/>
                              
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Entity Type</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="entity_type">
                              <option value="1">Student</option>
                              <option value="2">Instructor</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="firstname" placeholder="First Name" />
                             @error('fname')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Middle Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="middlename" placeholder="Middle Name" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="lastname" placeholder="Last Name" />
                             @error('lname')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Suffix</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="suffix" placeholder="JR., SR., III (Put N/A if not applicable)" />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="dd/mm/yyyy" name="birthdate"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Place of Birth</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="birthplace" placeholder="Place of Birth">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                       <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Sex</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="sex" id="membershipRadios1" value="1" checked>
                               Male
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="sex" id="membershipRadios2" value="2">
                                Female
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Civil Status</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="civil_status">
                            <option>Single</option>
                            <option>Married</option>
                            <option>Widowed</option>
                            <option>Separated</option>
                          </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Height (m)</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="height" placeholder="Height (m)">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Weight (kg)</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="weight" placeholder="Height (kg)">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Blood Type</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="blood_type" placeholder="Blood Type">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">GSIS ID NO.</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="gsis_id" placeholder="GSIS ID NO.">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">PHILHEALTH NO.</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="philhealth_no" placeholder="PHILHEALTH NO.">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">SSS NO.</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="sss_no" placeholder="SSS NO.">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">TIN NO.</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="tin_no" placeholder="TIN No.">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">AGENCY EMPLOYEE NO.</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="agency_employee_no" placeholder="AGENCY EMPLOYEE NO.">
                          </div>
                        </div>
                      </div>
                      

                    </div>
                   
                    <div class="row">
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">CITIZEN SHIP</label>
                          <div class="col-sm-2">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="citizenship" id="membershipRadios1" value="1" checked onclick="hidethis()">
                              Filipino
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 ">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="citizenship" id="membershipRadios2" value="2" onclick="showthis();">
                                Dual Citizenship
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 tago">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="membershipRadios" id="membershipRadios2">
                                By Birth
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 tago">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="membershipRadios" id="membershipRadios2">
                                By Naturalization
                              </label>
                            </div>
                          </div>
                         
                        </div>
                        <div class="col-md-6 tago">
                        <div class="form-group row">
                           
                          <div class="col-sm-8">
                           <select class="form-control">
                             <option>Albania</option>
                           </select>
                           <span><code>If holder of dual citizenship, please indicate the details</code></span>
                          </div>
                        </div>
                      </div>
                    </div>

                   
                       <p class="card-description">
                     RESIDENTIAL ADDRESS
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">HOuSE/BLOCK/LOT NO.</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="res_house" placeholder="HOuSE/BLOCK/LOT NO." id="res_house">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">STREET</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="res_street" id="res_street">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">SUBDIVISION/VILLAGE</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="res_subdivision" id="res_subdivision">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">BARANGAY</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="res_brgy" id="res_brgy">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">CITY/MUNICIPAL</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="res_city" id="res_city">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">PROVINCE</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="res_province" id="res_province">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">ZIPCODE</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="res_zipcode" id="res_zipcode">
                          </div>
                        </div>
                      </div>
                    </div>
                      <p class="card-description">
                     PERMANENT ADDRESS &nbsp;&nbsp;&nbsp;<input type="checkbox" name="copy" id="copy"> <code>Check if Residential and permanent address are the same</code>
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">HOSE/BLOCK/LOT NO.</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="per_house" id="per_house">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">STREET</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="per_street" id="per_street">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">SUBDIVISION/VILLAGE</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="per_subdivision" id="per_subdivision">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">BARANGAY</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="per_brgy" id="per_brgy">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">CITY/MUNICIPAL</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="per_city" id="per_cityt">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">PROVINCE</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="per_province" id="per_province">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">ZIPCODE</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="per_zipcode" id="per_zipcode">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">TELEPHONE NO.</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="telephone" placeholder="TELEPHONE">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">MOBILE NO.</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="mobile" placeholder="MOBILE NUMBER">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">EMAIL</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="email" placeholder="EMAIL ADDRESS.">
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><br>
                     <center> <h3>FAMILY BACKGROUND</h3></center>
                     <p class="card-description">
                     SPOUSE INFORMATION
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="s_name" placeholder="First Name" />
                              
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">MIDDLE Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="s_mname" placeholder="First Name" />
                              
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">LAST Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="s_lname" placeholder="First Name" />
                              
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">EXTENSION</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="s_extension" placeholder="First Name" />
                            
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">OCCUPATION</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="s_business" placeholder="First Name" />
                           
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">EMPLOYER/BUSINESS NAME</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="s_business" placeholder="First Name" />
                              
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">BUSINESS ADDRESS</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="s_" placeholder="First Name" />
                             @error('fname')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">TELEPHONE NUMBER</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="s_telephone" placeholder="First Name" />
                             
                          </div>
                         </div>
                       </div>



                    </div>
                   <p class="card-description">
                     FATHER'S INFORMATION
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">FIRST NAME </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="father_name" placeholder="First Name" />
                             @error('fname')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">MIDDLE NAME</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="father_middle" placeholder="First Name" />
                             @error('fname')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">LAST NAME</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="father_lastname" placeholder="First Name" />
                             @error('fname')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">EXTENSION</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="father_nameextension" placeholder="First Name" />
                             
                          </div>
                        </div>
                      </div>
                    </div>

                  <p class="card-description">
                    MOTHERS'S INFORMATION
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">FIRST NAME </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="mother_lastname" placeholder="First Name" />
                           
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">MIDDLE NAME</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="mother_middlename" placeholder="First Name" />
                             @error('fname')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">LAST NAME</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="mother_lastname" placeholder="First Name" />
                             @error('fname')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                          </div>
                        </div>
                      </div>
                      
                    </div>

                  </div>
                  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <br>
                    <center> <h3>CHILDREN</h3></center>
                      <table class="table" id="user_table">
                           <thead>
                            <tr>
                                <th width="35%">FULL Name</th>
                                <th width="35%">BIRTHDAY</th>
                                <th width="30%">ACTION</th>
                            </tr>
                           </thead>
                           <tbody id="childrenbody">

                           </tbody>
                           <tfoot>
                            <tr>
                              <td colspan="2" align="right">&nbsp;</td>
                              <td>
                              
                             </td>
                            </tr>
                           </tfoot>
                       </table>
                   
                  </div>
                  <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact-tab1"><br>
                    <center> <h3>FAMILY BACKGROUND</h3></center>L



                  </div>
                </div>
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">PERSONAL INFO</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">FAMILY BACKGROUND</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">CHILDREN</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab1" data-bs-toggle="pill" data-bs-target="#pills-contact1" type="button" role="tab" aria-controls="pills-contact1" aria-selected="false">EDUCATIONAL BACKGROUND</button>
                  </li>
                </ul>
                <button type="submit" class="btn btn-primary" id="save">Save</button>
              </form>
                  
                   
                </div>
              </div>
            </div>
            
             
          </div>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
          <script type="text/javascript">
            $(document).ready(function() {
              $('#registerform').on('submit', function(event){
                  event.preventDefault();
                    var formData = new FormData(this);
                  $.ajax({
                      url:'{{ route('register.entity') }}',
                      method:'post',
                      data:formData,
                      contentType: false,
                      processData: false,
                      beforeSend:function(){
                          $('#save').attr('disabled','disabled');
                      },
                      success:function(data)
                      {
                        
                          if(data.error)
                          {
                              var error_html = '';
                              for(var count = 0; count < data.error.length; count++)
                              {
                                  error_html += '<p>'+data.error[count]+'</p>';
                              }
                              $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                          }
                          else
                          {
                         swal({
                          title: 'New Entity Added',
                              text: 'Once deleted, you will not be able to recover this imaginary file!',
                              icon: 'success',
                              buttons: true,
                              dangerMode: true,
                              buttons: ['Create New', 'Saved & Proceed to Profile']
                                          }).then((willDelete) => {
                            if (willDelete) {

                            var ss =data.id;
                             var url = "{{ route('profile', ':ss') }}";
                             url = url.replace(':ss', ss);
                              window.location.href = url;
                            } else {
                              $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                              $('#registerform').get(0).reset();
                              $('#pills-home-tab').click();
                              
                            }
                          });
                               
                             
                          }
                          $('#save').attr('disabled', false);
                      }
                  })
           });
      
$('.tago').hide();
$('#copy').val($(this).is(':checked'));

  $('#copy').change(function() {
    if ($(this).is(':checked')) {
    $('#per_house').val($('#res_house').val());
    $('#per_street').val($('#res_street').val());
    $('#per_subdivision').val($('#res_subdivision').val());
    $('#per_brgy').val($('#res_brgy').val());
    $('#per_city').val($('#res_city').val());
    $('#per_province').val($('#res_province').val());
    $('#per_zipcode').val($('#res_zipcode').val());
  }else{
    $('#per_house').val("");
    $('#per_street').val("");
    $('#per_subdivision').val("");
    $('#per_brgy').val("");
    $('#per_city').val("");
    $('#per_province').val("");
    $('#per_zipcode').val("");
  }
  });
  

  $('#checkbox1').click(function() {
    if (!$(this).is(':checked')) {
      return confirm("Are you sure?");
    }
  });
  });

 var count = 1;

 dynamic_field(count);

 function dynamic_field(number)
 {
  html = '<tr>';
        html += '<td><input type="text" name="full_name[]" class="form-control form-control-sm" place="Full Name"/></td>';
        html += '<td><input type="text" name="birthday[]" class="form-control" place="Birthday"/></td>';
        if(number > 1)
        {
            html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
            $('#childrenbody').append(html);
        }
        else
        {   
            html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
            $('#childrenbody').html(html);
        }
 }

 $(document).on('click', '#add', function(){
  count++;
  dynamic_field(count);
 });

 $(document).on('click', '.remove', function(){
  count--;
  $(this).closest("tr").remove();
 });

          </script>

      @endsection