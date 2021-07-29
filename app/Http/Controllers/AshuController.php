<?php

namespace App\Http\Controllers;

use App\ashu;
use Illuminate\Http\Request;

class AshuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('ashu');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phone=new ashu;
        $phone->hming=request('naam');
        $phone->kum=request('umar');
        $phone->save();
        return redirect('/final');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ashu  $ashu
     * @return \Illuminate\Http\Response
     */
    public function show(ashu $ashu)
    {
        $serious=ashu::all();
        return view('dikha',['seri'=>$serious]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ashu  $ashu
     * @return \Illuminate\Http\Response
     */
    public function edit(ashu $ashu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ashu  $ashu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ashu $ashu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ashu  $ashu
     * @return \Illuminate\Http\Response
     */
    public function destroy(ashu $ashu)
    {
        //
    }
}
