<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\pizza;

class pizzaController extends Controller
{
    public function index()
    {
      // $pizza=pizza::all();
      //  $pizza=pizza::orderBy("id",'desc')->get();
      // $pizza=Pizza::where('type','hawaiian')->get();
      $pizza=Pizza::latest()->get();
       return view('pizza.pizza',[
             'pizza'=>$pizza,
            'name'=>request('name'),
            'age'=>request('age')

       ]);
        }
     public function show($id)
        {
          $pizza=pizza::findOrFail($id);
          return view('pizza.details',["pizza"=>$pizza]);
        
        }   

        public function create()
        {
            return view('pizza.create');

        }

          public function store()
          {
           $knife=new pizza();
           $knife->name=request('name');
           $knife->type=request("type");
           $knife->base=request("base");
           $knife->toppings=request("toppings");
          $knife->save();
          // dd( request('toppings'));
          // return request('toppings'); 
          return redirect('/pizza_welcome')->with('msg','done');
          }

          public function destroy($id){
            $pizza=pizza::findorfail($id);
            $pizza->delete();
            return redirect('/pizza');
          }

      }







