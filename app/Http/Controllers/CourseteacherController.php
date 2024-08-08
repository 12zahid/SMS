<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Http\RedirectResponse;
use illuminate\Http\Client\Response;
use illuminate\View\view;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\CourseTeacher;

class CourseTeacherController extends Controller
{
    public function index():view
    {
        $courses=Course::all();
        $teachers=Teacher::all();
        $courseTeachers = CourseTeacher::with('course', 'teacher')->get();
        return view('courseteachers.index', compact('courseTeachers'));
    }

    public function create():view
    {
        $courses = Course::all();
        $teachers = Teacher::all();
        return view('courseteachers.create', compact('courses', 'teachers'));
    }

    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'course_id' => 'required',
            'teacher_id' => 'required',
        ]);

        CourseTeacher::create($request->all());
        return redirect('courseteachers')->with('flash_message','Save');
    }

    public function edit($id):view
    {
        $courseTeacher = CourseTeacher::findOrFail($id);
        $courses = Course::all();
        $teachers = Teacher::all();
        return view('courseteachers.edit', compact('courseTeacher', 'courses', 'teachers'));
    }
    public function show($id):view
    {
        $courses=Course::all();
        $teachers=Teacher::all();
        $courseTeacher=CourseTeacher::with(['course','teacher'])->findOrFail($id);
        return view('courseteachers.show',compact('courseTeacher'));
    }

    public function update(Request $request, $id):RedirectResponse
    {
        $request->validate([
            'course_id' => 'required',
            'teacher_id' => 'required',
        ]);
        // $courseTeacher = CourseTeacher::findOrFail($id);
        // $courseTeacher->update($request->all());
        // $course = Course::find($request->input('course_id'));
        // $course->teachers()->sync([$request->input('teacher_id')]);
        $courseTeacher = CourseTeacher::findOrFail($id);
        $courseTeacher->update($request->all());
    
        return redirect('courseteachers')->with('flash_message','Updated successfully');
        // $courses=Course::find($id);
        // $teachers=Teacher::find($id);
        // $data=$request->all();
        // $courses->update($data);
        // $teachers->update($data);
    }

    public function destroy($id)
    {
        CourseTeacher::destroy($id);
        return redirect()->route('courseteachers.index');
    }
}

