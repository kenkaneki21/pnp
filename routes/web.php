<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EnrollmentController;
use App\Models\Course;
use App\Models\Entity;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


 Route::get('/wizard', function () {
	 
	 


    $latest = Entity::where('entity_type','=','1');
    return $latest;
});
 
 Route::get('/dynamic', function () {
     
     


    return view('admin.course.sample');
});
  Route::get('/profile', function () {
     
     


    return view('admin.entity.profile');
});
 Route::get('/displaylang1',[EntityController::class,' index']);
 Route::get('/displaylang',[EntityController::class,'Displayonly']);
 Route::post('/entity/search',[EntityController::class,'SearchEntity'])->name('search.entity');


// Home Controller

Route::get('/',[HomeController::class,'index'])->name('dashboard');

//Entities Controller 

Route::get('/entity/register',[EntityController::class,'Register'])->name('entity.register');
Route::post('/entity/create',[EntityController::class,'RegisterEntity'])->name('register.entity');
Route::get('/entity',[EntityController::class,'Entitylist'])->name('entity.all');
Route::get('/entity/profile/{id}',[EntityController::class,'EntityEdit'])->name('profile');
Route::post('/entity/update/{id}',[EntityController::class,'EntityUpdate']);
Route::get('/entity/delete/{id}',[EntityController::class,'EntityDelete']);


// Course Controller

Route::get('/course',[CourseController::class,'index'])->name('course.list');
Route::post('/course/add',[CourseController::class,'AddCourse'])->name('add.course');
Route::get('/course/get',[CourseController::class,'GetCourse'])->name('course.getjson');
Route::get('/course/getbyid/{id}',[CourseController::class,'GetCoursebyId'])->name('course.get');



// User Controller

Route::get('/users',[UserController::class,'index'])->name('user.record');
Route::post('/user/add',[UserController::class,'CreateUser'])->name('user.add');
Route::get('/course/resetpass/{id}',[UserController::class,'ResetPass']);

 
// Enrollment Controller
Route::get('/entity/enroll/{id}',[EnrollmentController::class,'index'])->name('enrollment');
Route::post('/entity/recordenroll/{id}',[EnrollmentController::class,'EnrollEntity'])->name('enrollment.add');
Route::get('/entity/print',[EnrollmentController::class,'printer1'])->name('print.enrollment');
Route::get('/entity/print2',[EnrollmentController::class,'printer2'])->name('print.enrollment');
Route::get('/enroll',[EnrollmentController::class,'enroll'])->name('enroll.student');
Route::post('/student/search',[EnrollmentController::class,'searchstudent'])->name('student.search');

 



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
	$latest = Entity::latest()->get();
   $newlatest = $latest->count();
	$students = Entity::where('entity_type','=','1')->get();
   $student = $students->count();
   $instructors = Entity::where('entity_type','=','2')->get();
   $instructor = $instructors->count();
   $courses = Course::get();
   $course = $courses->count();

    return view('dashboard',compact('newlatest','student','instructor','course'));
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
  $latest = Entity::latest()->get();
   $newlatest = $latest->count();
  $students = Entity::where('entity_type','=','1')->get();
   $student = $students->count();
   $instructors = Entity::where('entity_type','=','2')->get();
   $instructor = $instructors->count();
   $courses = Course::get();
   $course = $courses->count();

    return view('dashboard',compact('newlatest','student','instructor','course'));
})->name('dashboard');
Route::get('logout',[EntityController::class,'Logout']);
