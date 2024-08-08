<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Course;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Course;
use App\Models\CourseTeacher;
class SearchController extends Controller
{
    public function search(Request $request){
       
       $query = $request->input('query');
        $courses=Course::all();
        $courseteachers=CourseTeacher::all();
        $students = Student::where('first_name', 'LIKE', "%{$query}%")
                            ->orWhere('last_name', 'LIKE', "%{$query}%")
                            ->orWhere('email', 'LIKE', "%{$query}%")
                            ->get();
        
        $teachers = Teacher::where('first_name', 'LIKE', "%{$query}%")
                            ->orWhere('last_name', 'LIKE', "%{$query}%")
                            ->orWhere('email', 'LIKE', "%{$query}%")
                            ->get();

       return view('search.results',compact('students','teachers'));
    }
}
