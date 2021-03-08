<?php

namespace App\Http\Controllers;
use App\Models\Nursery;
use Illuminate\Http\Request;

class NurseryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('nursery.teacher');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kid=new Nursery();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nursery  $nursery
     * @return \Illuminate\Http\Response
     */
    public function show(Nursery $nursery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nursery  $nursery
     * @return \Illuminate\Http\Response
     */
    public function edit(Nursery $nursery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nursery  $nursery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nursery $nursery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nursery  $nursery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nursery $nursery)
    {
        //
    }
}
