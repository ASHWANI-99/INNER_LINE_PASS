<?php

namespace App\Http\Controllers;

use App\practice;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view("hobbies");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "I am create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function show(practice $practice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function edit(practice $practice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, practice $practice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function destroy(practice $practice)
    {
        //
    }
}
