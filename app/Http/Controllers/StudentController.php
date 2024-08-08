<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Http\RedirectResponse;
use App\Models\Student;
use Illuminate\Http\Client\Response;
use illuminate\View\View;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():view
    {
        //$students=Student::all();
        $students=Student::paginate(3);
        return view('students.index')->with('students',$students);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create():view
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request):RedirectResponse
    {
        $input=$request->all();
        Student::create($input);
        return redirect('students')->with('flash_message','Student Added');
    //     $request->validate([
    //         'Name' => 'required',
    //         'Address' => 'required',
    //         'Mobile' => 'required',
    //     ]);
    //     $input = $request->all();
    //     Student::create($input);
    //     return redirect('students')->with('flash_message', 'Student Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id):view
    {
        $students=Student::find($id);
        return view('students.show',compact('students'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id):view
    {
        $students=Student::find($id);
        return view('students.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id):RedirectResponse
    {
        $students=Student::find($id);
        $input=$request->all();
        $students->update($input);
        return redirect('students')->with('flash_message','student update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('students')->with('flash_message','student Deleted');
    }
}
