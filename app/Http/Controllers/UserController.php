<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use App\Models\User;
use App\Models\Course;

class UserController extends Controller
{ 
    //
     public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
     $users = User::latest()->paginate(5);
    return view('admin.user.index',compact('users'));
    }
    public function CreateUser(Request $request){
    	 Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        
        ])->validate();

         User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

         return Redirect()->back()->with('success','User Added Succesfully');
    }
}
