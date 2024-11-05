<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   function openRegister(){
        return view("register");
   }

   function createStudent(Request $request){
        $result = $request->all();
        $result["hobby"] = implode(",",$result["hobby"]);
        Student::create($result);   
                  return redirect()->route("display");
 
   }

   function display(){
        $result = Student::get();
        return view("display", ["Students" => $result]);
   }

   function deleteStudent($id){
          Student::where("rno", "=", $id)->delete();
          return redirect()->route("display");
   }

   function editData(Request $request){
          $rno = $request->rno;
          $student = Student::where("rno", "=", $rno)->first();
          return view("updateStudent", compact('student'));
   }

   function update(Request $request){
          Student::where("rno", "=", $request->rno)->update([
               "name"=>$request->name,
               "email"=>$request->email,
               "gender"=>$request->gender,
               "hobby"=>implode(",",$request->hobby),
               "dob"=>$request->dob,
               "city"=>$request->city,
               "password"=>$request->password
          ]);
          return redirect()->route("display");

   }
}