<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    //
    public function index(){
        return view('student.create');
    }
    public function store(Request $request){
      // dd($request);                     // checked debuging
       $student= new Student();

       $student->name=$request->name;
       $student->address=$request->address;
       $student->save();
       return redirect('student');
    }
    public function show(){
        $students =Student::get();         //retrieve all table data from db
        return view('student.show',['students'=>$students]);

    }
    public function edit($id){
        $student =Student::find($id);  //retreive row data accordind to the student  id 
        return view('student.edit',['student'=>$student]);
    }
    public function update(Request $request , $id){
        $student =Student::find($id);
        $student= new Student();

        $student->name=$request->name;
        $student->address=$request->address;
        $student->save();
        return redirect('student');
   
    }
    public function delete($id){
  Student::destroy($id);
  return redirect('student');
    }
}

