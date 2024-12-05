<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\student;

class StudentController extends Controller
{
function addStudent(Request $request){
    $student = new student;
    $student->id = $request->id;
    $student->name = $request->name;
    $student->phone = $request->phone;
    $student->gender = $request->gender;
    $student->class=$request->class;
    $student->lastname=$request->lastname;
    $student->save();
    return response()->json(["status"=> $student]);
}

}
