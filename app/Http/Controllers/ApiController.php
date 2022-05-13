<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllStudents() {
        echo "teste";
      }
  
      public function createStudent(Request $request) {
        $student = new Student;
        $student->name = $request->name;
        $student->course = $request->course;
        $student->save();
    
        return response()->json([
            "message" => "student record created"
        ], 201);
      }
  
      public function getStudent($id) {
        $students = Student::get()->toJson(JSON_PRETTY_PRINT);
        return response($students, 200);
      }
  
      public function updateStudent(Request $request, $id) {
        // logic to update a student record goes here
      }
  
      public function deleteStudent ($id) {
        // logic to delete a student record goes here
      }
}
