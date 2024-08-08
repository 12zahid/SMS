<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Http\Client\Response;
use illuminate\Http\RedirectResponse;
use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Course;
use App\Models\Payment;
use illuminate\View\view;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():view
    {
        $enrollments=Enrollment::with('Student','Course')->get();
        return view('enrolls.index',compact('enrollments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create():view
    {
        $students=Student::all();
        $courses=Course::all();
        return view('enrolls.create',compact('students','courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request):RedirectResponse
    {
       // $enrollments=;
        Enrollment::create($request->all());
        return redirect('enrolls')->with('flash_message','Save ');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id):view
    {
        $enrollment=Enrollment::with('student','course','payments')->findOrFail($id);
        return view('enrolls.show',compact('enrollment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id):view
    {
        $enrollments=Enrollment::find($id);
        $students=Student::all();
        $courses=Course::all();
        $payments=Payment::all();
        return view('enrolls.edit',compact('enrollments','courses','students','payments'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $getid=Enrollment::find($id);
        $input=$request->all();
        $getid->update($input);
        //Enrollment::update($request->all);
        return redirect('enrolls')->with('flash_message','updated ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
