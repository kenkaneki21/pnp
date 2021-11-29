<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Carbon;
use Auth;
use Illuminate\Support\Str;
class CourseController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
    $courses = Course::latest()->paginate(5);
    return view('admin.course.index',compact('courses'));
    }
    public function AddCourse(Request $request){
    	// $validated = $request->validate([
     //        'name' => 'required',
             
     //    ],
     //    [
     //        'name.required' => 'Please Input Course Name',
            
     //    ]);
       
         
 
         
        
     //    Course::insert([
     //        'name' => Str::ucfirst($request->name),
            
     //        'created_at' => Carbon::now(),
     //    ]);

          $course = new Course;
        $course->name = $request->name;
       $course_created_at  = Carbon::now();
        $course->save();
        

        return Redirect()->back()->with('success','Course Added Succesfully');
       


    }
    public function GetCourse(){
        $courses = Course::get();

         $data = array();
         $n=0;
         foreach ($courses as $k) {
          $n++;
          $row = array();
          $row[] = '<strong>'.$k->name.'</strong>';
          $row[] ="";
          $row[] ='<button class="btn btn-primary btn-xs addcourse" id="addcourse_'.$k->id.'"><i class="mdi mdi-plus-circle"></i></button>';

          $data[] = $row;
          }
          $output = array(
             "draw" =>2,
             "recordsTotal" => count($courses),
             "recordsFiltered" =>  count($courses),
             "data" => $data,
          );
   
     return response()->json($output);

    }
    public function GetCoursebyId($id){
     $courses = Course::find($id);
     return response()->json($courses);

    }
}
