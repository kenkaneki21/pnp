<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entity;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
class EnrollmentController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function index($id){
   	$entities = Entity::find($id);
    $courses = Course::latest();

    
    return view('admin.enrolment.enroll',compact('entities','courses'));
    }
    public function printer1(){
      return view('admin.enrolment.enrolmentdetail');
    }
    public function printer2(){
      return view('admin.enrolment.prints');
    }
    public function enroll(){
      $entities = "";
    
      $courses = Course::join('enrollments', 'enrollments.course_id', '=', 'courses.id','right')
  ->select('courses.name',DB::raw("count(enrollments.id) as total"))
  ->groupBy('courses.name')
   
  ->get();
 

       
 
   
      return view('admin.enrolment.searchstudent',compact('entities','courses'));
    }
    public function searchstudent(Request $request){
    $entities = "";
    $courses = Course::join('enrollments', 'enrollments.course_id', '=', 'courses.id','right')
  ->select('courses.name',DB::raw("count(enrollments.id) as total"))
  ->groupBy('courses.name')
   
  ->get();
    if($request->search){
    $entities = Entity::where('f_name', $request->search)
    ->orWhere('l_name', 'like', '%' . $request->search . '%')->where('entity_type',1)->orderBy('l_name', 'asc')->get();
    }
    return view('admin.enrolment.searchstudent',compact('entities','courses'));
    }
    public function EnrollEntity(Request $request,$id){
    	  $course_id = $request->course_id;
          
            for($count = 0; $count < count($course_id); $count++)
          {
           $data = array(
            'personal_id' => $id,
            'course_id' => $course_id[$count],
             
            'created_at' => Carbon::now(),
           );
           $insert_data[] = $data; 
          }



          $enrolment = Enrollment::insert($insert_data);

      return response()->json([
       'success'  => 'Data Added successfully.',
       'id' => $id,
       
      ]);

    }
}
