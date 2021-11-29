<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entity;
use App\Models\Enrollment;
use Illuminate\Support\Carbon;
class EnrollmentController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function index($id){
   	$entities = Entity::find($id);
    return view('admin.enrolment.enroll',compact('entities'));
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
