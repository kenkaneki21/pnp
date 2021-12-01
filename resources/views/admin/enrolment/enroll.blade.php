@extends('admin.admin_master')

@section('admin')
<div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-2">
                      <div class="border-bottom text-center pb-4">
                        
                          @if($entities->profile_pic)
                           <img src="{{ asset($entities->profile_pic)}}" alt="profile" class="img-lg rounded-circle mb-3"/> 
                            @else
                               <img src="{{ asset('template/images/faces/face13.jpg') }}" alt="profile" class="img-lg rounded-circle mb-3"/>
                             @endif
                        <div class="mb-3">
                          <h3>{{ $entities->f_name }} {{ $entities->m_name }} {{ $entities->l_name }} </h3>
                         
                        </div>
                        <p class="w-75 mx-auto mb-3">Bureau Oberhaeuser is a design bureau focused on Information- and Interface Design. </p>
                        <div class="d-flex justify-content-center">
                          <button class="btn btn-success mr-1">Hire Me</button>
                          <button class="btn btn-success">Follow</button>
                        </div>
                      </div>
                     
                       
                      <button class="btn btn-primary btn-block mb-2">Previous Course</button>
                    </div>
                    <div class="col-lg-10">
                      <form id="submitenroll" method="post">
                        @csrf
                      <div class="d-block d-md-flex justify-content-between mt-4 mt-md-0">
                        <div class="text-center mt-4 mt-md-0">
                          <button type="submit" class="btn btn-outline-primary" id="enrolbtn">Enroll</button>
                          <button class="btn btn-warning" id="reset">Reset</button>
                          <button class="btn btn-danger">Cancel</button>
                           

                        </div>
                      </div>
                      <div class="mt-4 py-2 border-top border-bottom">
                         <span>SELECT COURSE</span>
                      </div><br>
                      <div class="profile-feed">
                         <div class="row">
                           <div class="col-md-6">
                            <h4 class="card-title">Course List</h4>
                               <div class="table-responsive">
                            <table id="example" class="table">
                              <thead>
                                <tr>
                                    <th>Couse</th>
                                    <th>Details</th>
                                     
                                    <th>Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                 
                              </tbody>
                            </table>
                           </div>

                   
                           </div>
                           <div class="col-md-6">
                            <h4 class="card-title">Course Selected</h4>
                              <div class="table-responsive">
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th>
                                       Course
                                      </th>
                                      <th>
                                       Instructor
                                      </th>
                                       
                                      <th>
                                        Action
                                      </th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody id="selectedcourse">
                                    
                                     
                                     
                                  </tbody>
                                </table>
                              </div>
                            </div>
                           </div>
                          </form>  

                          <!-- Modal -->
            <div class="modal fade" id="enrollalert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">STUDENT DETAILS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="forms-sample" >
                    {{ csrf_field() }}
                  <div class="modal-body" id="printbody">
                    
                          <div class="container-fluid d-flex justify-content-between">
                            <div class="col-lg-3 pl-0">
                              <p class="mt-5 mb-2"><b>Spica Admin</b></p>
                              <p>104,<br>Minare SK,<br>Canada, K1A 0G9.</p>
                            </div>
                            <div class="col-lg-3 pr-0">
                              <img src="{{ asset('template/logopnp/logo.png') }}" alt="" width="100px">
                            </div>
                          </div>
                          
                          <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                            <div class="table-responsive w-100">
                                <table class="table" id="training">
                                  <thead>
                                    <tr class="bg-dark text-white">
                                        <th>#</th>
                                        <th>Course/Training</th>
                                        <th class="text-end">Instructor</th>
                                        <th class="text-end">Unit</th>
                                         
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <tr class="text-end">
                                      <td class="text-start">1</td>
                                      <td class="text-start">Brochure Design</td>
                                      <td>2</td>
                                      <td>$20</td>
                                       
                                    </tr>
                                    <tr class="text-end">
                                      <td class="text-start">2</td>
                                      <td class="text-start">Web Design Packages(Template) - Basic</td>
                                      <td>05</td>
                                      <td>$25</td>
                                       
                                    </tr>
                                    <tr class="text-end">
                                      <td class="text-start">3</td>
                                      <td class="text-start">Print Ad - Basic - Color</td>
                                      <td>08</td>
                                      <td>$500</td>
                                     
                                    </tr>
                                    <tr class="text-end">
                                      <td class="text-start">4</td>
                                      <td class="text-start">Down Coat</td>
                                      <td>1</td>
                                      <td>$5</td>
                                      
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                          </div>
                           
                       
                               
                            
                  </div>
                  <div class="modal-footer">
                  <a class="btn btn-primary float-right mt-4 ms-2" href="{{ route('print.enrollment') }}" target="_blank"><i class="mdi mdi-printer me-1" ></i>Print</a>
                            <a href="#" class="btn btn-success float-right mt-4"><i class="mdi mdi-keyboard-backspace me-1"></i>Back</a>
                  </div>
                    </div>
                </div>
              </div>
            </div>
                           
                         
                         
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="{{ asset('template/js/jquery.dataTables.js')}}"></script>
          <script type="text/javascript">
             var count = 1;
             var course_id = [];

              $(document).ready(function() {
               window.addEventListener('beforeunload', 
                                function (e) {
  
            // Check if any of the input
            // fields are filled
            if(course_id.length) {
  
                // Cancel the event and
                // show alert that the unsaved
                // changes would be lost
                e.preventDefault();
                e.returnValue = '';
            }
        });
              
              $('#example').dataTable({
                  "lengthChange": false,
                  "bInfo": false, // hide showing entries

                    'ajax' : "{{ route('course.getjson') }}",
              })
              $('table#example').on('click', 'button.addcourse', function(event){
                 event.preventDefault();
                var id = this.id.split("_");
                user_no = id[1];
                count++;
               dynamic_field(count,user_no);
              })
                $('table#example').on('click', 'button.remove', function(){

                var id = this.id.split("_");
                user_no = id[1];
           
               
              })
                 $('#submitenroll').on('submit', function(event){
                  event.preventDefault();
                    var formData = new FormData(this);
                     $.ajax({
                      url:"{{ route('enrollment.add',$entities->id) }}",
                      method:"post",
                      data:formData,
                      contentType: false,
                      processData: false,
                      beforeSend:function(){
                          $('#enrolbtn').attr('disabled','disabled');
                      },
                   
                      success:function(data)
                      {
                        
                        $('#enrollalert').modal('show')
                          gotocourse(data.id);
                        course_id.length = 0;
                         html = "";
                         $('#selectedcourse').html(html);
                          $('#enrolbtn').attr('disabled',false);
                        


                      }
                      })

                });


             });

  

 function gotocourse(id){
  alert(id);
 }
 function printDiv(){

    var $this = $(this);
   
    var printArea = $this.parents('#printbody').html();

    $('body').html(printArea);
    window.print();
    $('body').html(originalContent);
}

 function dynamic_field(number,user_no)
 { 
  var result =true
  var co_id =user_no;
  
  if(course_id.length === 0){
  course_id.push(co_id)
   
  
}else{
  
  for (var i = 0; i <= course_id.length; i++) {
    if(course_id[i] == user_no){
    console.log(course_id.length)
    result =false;
    }
  }
  course_id.push(co_id)
}
if(result){
  var ss =user_no;
  var url = "{{ route('course.get', ':ss') }}";
  url = url.replace(':ss', ss);
   $.ajax({
     url: url,
     method:'get',
     success:function(data)
     {
       html = '<tr id="ke'+data.id+'" class="key">';
        html += '<td><input type="hidden" name="course_id[]" value="'+data.id+'">'+data.name+'</td>';
        html += '<td><input type="text" name="birthday[]" class="form-control" place="Birthday" value="'+data.id+'"/></td>';
        if(number > 1)
        {
            html += '<td><button type="button" name="remove" id="remove_'+data.id+'" class="btn btn-danger btn-xs remove"><i class="mdi mdi-window-close"></i></button></td></tr>';
            $('#selectedcourse').prepend(html);
        }
        $(".key").css({ 'background-color' : '', 'opacity' : '' });
     }
   })
  }else{
    for (var i = 0; i <= course_id.length; i++) {
      if(course_id[i] == user_no){
      $('#ke'+course_id[i]).css("background-color","#feb3c6");
      break;
    }
  }

  }
        
 }
 
 $(document).on('click', '.remove', function(){
   var id = this.id.split("_");
  user_no = id[1];
  for (var i = 0; i <= course_id.length; i++) {
      if(course_id[i] == user_no){
        var index = course_id.indexOf(user_no);
        course_id.splice(index) 
    }
  }
                
  count--;
  $(this).closest("tr").remove();
 });
 $(document).on('click', '#reset', function(event){ 
   event.preventDefault();
 course_id.length = 0;
 html = "";
 $('#selectedcourse').html(html);

        
 });
          
          </script>
          @endsection