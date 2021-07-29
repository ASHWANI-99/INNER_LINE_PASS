<?php

namespace App\Http\Controllers;

use App\Dummy;

use Illuminate\Http\Request;

class DummyController extends Controller
{
    public function index() {
        return view('dummy');
    }

    public function store() {

        $dummies = new Dummy();

        $dummies->school = request('school');
        $dummies->phoneno = request('phoneno');

        $dummies->save();

        return redirect('/dummy')->with('mssg','Success');
    }
    public function show() {
        $apps = Dummy::all();

        return view('/dummy1', [
            'apps' => $apps,
        ]);
    }
}
