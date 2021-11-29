<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entity;
use App\Models\Family;
use App\Models\Child;
use Illuminate\Support\Carbon;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Image;

class EntityController extends Controller
{
   public function __construct(){
      $this->middleware('auth');
    }
    //
    public function Entitylist(){
     $entities = Entity::orderBy('l_name', 'asc')->paginate(10);
     $markings = 1 ;
     return view('admin.entity.index',compact('entities','markings'));
    }
    public function Register(){
    	 return view('admin.entity.register');
    }
    public function SearchEntity(Request $request){
      $markings =0;
      if($request->search == NULL){
         $entities = Entity::latest()->paginate(10);
        return Redirect()->route('entity.all');


      }else{
       
       $entities = Entity::where('f_name', $request->search)
    ->orWhere('l_name', 'like', '%' . $request->search . '%')->orderBy('l_name', 'asc')->get();
  }
    return view('admin.entity.index',compact('entities','markings'));
    }
    public function EntityEdit($id){
    	$entities = Entity::find($id);
    	 return view('admin.entity.edit',compact('entities'));

    }
    public function EntityUpdate(Request $request ,$id){
        // $update = Entity::find($id)->update([
        //     'entity_type' => $request->firstname,
        //     'f_name' => Str::ucfirst($request->firstname),
        //     'm_name' => Str::ucfirst($request->middlename),
        //     'l_name' => Str::ucfirst($request->lastname),     
        //    'birthdate' =>$request->lastname,
        //    'sex' => $request->lastname,
        //    'civil_status'=> $request->lastname,
        //    'height' => $request->lastname,
        //    'weight' => $request->lastname,
        //    'blood_type' => $request->lastname,
        //    'gsis_id' => $request->lastname,
        //    'philhealth_no' => $request->lastname,
        //    'sss_no' => $request->lastname,
        //    'tin_no'=> $request->lastname,
        //    'agency_employee_no' => $request->lastname,
        //    'citizenship'=> $request->lastname,
        //    'res_house' => $request->lastname,
        //     'res_street' => $request->lastname,
        //     'res_subdivision'=> $request->lastname,
        //     'res_brgy' => $request->lastname,
        //     'res_city' => $request->lastname,
        //     'res_province' => $request->lastname,
        //     'res_zipcode'=> $request->lastname,
        //     'per_house' => $request->lastname,
        //     'per_street' => $request->lastname,
        //     'per_subdivision' => $request->lastname,
        //     'per_brgy' => $request->lastname,
        //     'per_city' => $request->lastname,
        //     'per_province' => $request->lastname,
        //     'per_zipcode' => $request->lastname,
        //     'telephone' => $request->lastname,
        //     'mobile' => $request->lastname,
        //     'email' => $request->lastname,
        //     'profile_pic' => $request->lastname,


        // ]);

       
         
      return response()->json(["status" => "success", "message" => "Success! post deleted"]);
    }
    public function Displayonly(){

    $entities = Entity::find(19);
      return view(response()->json($entities));


    }
    public function RegisterEntity(Request $request){
      $last_img ="" ;
       $profile = $request->file('profile_pic');
       if($profile){
       $name_gen = hexdec(uniqid()).'.'.$profile->getClientOriginalExtension();
       $last_img = 'template/entity_photos/'.$name_gen;
       Image::make($profile)->resize(300,200)->save('template/entity_photos/'.$name_gen);
     }
    
    	 
      $entities =  Entity::create([
            'entity_type' => $request->entity_type,
            'profile_pic' => $last_img,   
            'f_name' => Str::ucfirst($request->firstname),
            'm_name' => Str::ucfirst($request->middlename),
            'l_name' => Str::ucfirst($request->lastname),     
           'birthdate' =>$request->birthdate,
           'sex' => $request->sex,
           'civil_status'=> $request->civil_status,
           'height' => $request->height,
           'weight' => $request->weight,
           'blood_type' => $request->blood_type,
           'gsis_id' => $request->gsis_id,
           'philhealth_no' => $request->philhealth_no,
           'sss_no' => $request->sss_no,
           'tin_no'=> $request->tin_no,
           'agency_employee_no' => $request->agency_employee_no,
           'citizenship'=> $request->citizenship,
           'res_house' => $request->res_house,
            'res_street' => $request->res_street,
            'res_subdivision'=> $request->res_subdivision,
            'res_brgy' => $request->res_brgy,
            'res_city' => $request->res_city,
            'res_province' => $request->res_province,
            'res_zipcode'=> $request->res_zipcode,
            'per_house' => $request->per_house,
            'per_street' => $request->per_street,
            'per_subdivision' => $request->per_subdivision,
            'per_brgy' => $request->per_brgy,
            'per_city' => $request->per_city,
            'per_province' => $request->per_province,
            'per_zipcode' => $request->per_zipcode,
            'telephone' => $request->telephone,
            'mobile' => $request->mobile,
            'email' => $request->email,
             
          

            'created_at' => Carbon::now(),
        ]);

       Family::insert([
            'personal_id' => $entities->id,
            'spouse_name' =>$request->s_name,
            'spouse_lname'  =>$request->s_lname,
            'spouse_middlename' =>$request->s_mname,
            'spouse_nameextension' =>$request->s_extension,
            'spouse_occupation' =>$request->s_occupation,
            'spouse_businessname' =>$request->s_business,
            'spouse_telephone' =>$request->s_telephone,
            'father_surname' =>$request->father_name,
            'father_firstname' =>$request->father_lastname,
            'father_middlename' =>$request->father_middle,
            'father_nameextension' =>$request->father_nameextension,
            'mother_lastname' =>$request->mother_lastname,
            'mother_firstname' =>$request->mother_firstname,
            'mother_middlename' =>$request->mother_middlename, 
            'created_at' => Carbon::now(),
        ]);
          $full_name = $request->full_name;
          $birthday = $request->birthday;
            for($count = 0; $count < count($full_name); $count++)
          {
           $data = array(
            'personal_id' => $entities->id,
            'full_name' => $full_name[$count],
            'birthday'  => $birthday[$count],
            'created_at' => Carbon::now(),
           );
           $insert_data[] = $data; 
          }
          $child = Child::insert($insert_data);
         

      return response()->json([
       'success'  => 'Data Added successfully.',
       'id' => $entities->id
      ]);

     return Redirect()->route('profile',$entities->id)->with('success','Brand Update Succesfully');
    }
     public function EntityDelete($id){
        $delete = Entity::find($id)->delete();
        return Redirect()->back()->with('success','Category Deleted Successfull');

    }
    public function Logout(){
        Auth::logout();
        return Redirect()->route('login')->with('success','User Logout');
    }
}
