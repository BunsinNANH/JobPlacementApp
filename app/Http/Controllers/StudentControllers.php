<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentControllers extends Controller
{
    public function getStudents(){
        $students = \App\Student::all();
        return view('pages.students',compact('students'));
    }
}
