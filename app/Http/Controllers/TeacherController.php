<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Http\RedirectResponse;
use App\Models\Teacher;
use Illuminate\Http\Client\Response;
use illuminate\View\View;

class TeacherController extends Controller
{
    /**php artisan make:controller CourseController --resource
php artisan make:model Student -m

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():view
    {
        $teachers = Teacher::paginate(3);
        return view("teachers.index")->with('teachers',$teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create():view
    {
        return view('teachers.create');
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
        Teacher::create($input);
        return redirect('teachers')->with('flash_message','Student Added');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id):view
    {
        $teachers=Teacher::find($id);
        return view('teachers.show')->with('teachers',$teachers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id):view
    { 
        $teachers=Teacher::find($id);
        return view('teachers.edit',compact('teachers'));
        
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
        $getid=Teacher::find($id);
        $data=$request->all();
        $getid->update($data);
        return redirect('teachers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teacher::destroy($id);
        return redirect('teachers')->with('flash_message','Deleted Successfully'); 
    }
}
