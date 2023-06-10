<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudentController extends Controller
{
    // 
    public  function store(Request $request)
    {
        try{
            $fields=$request->validate([
                'Name' => ['required','min:3'],
                'Email' => ['required','email'],
                'Password' => 'required',
            ]);
            $fields['Password']=bcrypt(  $fields['Password']);
            $student= Student::create($fields);

            if($student){
                return  response()->json([
                    'message' => "Student Added Successfully !",
                    'student'=>$student
                ], 201);
            }
            else{
                return response()->json([
                    'message' => "Error happened"
                ], 400); 
            } 
        }catch(err){
            return Response::json([
                'message' => err
            ], 500);
        }
    }
}
