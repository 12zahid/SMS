<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use illuminate\Http\RedirectResponse;
use App\Models\Payment;
use Illuminate\Support\Facades\Redis;
use illuminate\View\View;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():view
    {
        $payments=Payment::all();
        return view('payments.index',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create():view
    {
        $enrollments = Enrollment::with(['student', 'course'])->get();
        return view('payments.create', compact('enrollments'));
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
        Payment::create($input);
        return redirect('payments')->with('flash_message','Payment Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id):view
    {
        $payments=Payment::find($id);
        return view('payments.show',compact('payments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id):view
    {
        // $payments=Payment::find($id);
        // return view('payments.edit',compact('payments'));
        $payments = Payment::find($id);
        $enrollments = Enrollment::with(['student', 'course'])->get();
        return view('payments.edit', compact('payments', 'enrollments'));
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
        $payments=Payment::find($id);
        $input=$request->all();
        $payments->update($input);
        return redirect('payments')->with('flash_message','Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id):view
    {
        Payment::destroy($id);
        return view('payments')->with('flash_message','Deleted');

    }
}
