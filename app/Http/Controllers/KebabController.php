<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kebab;


class KebabController extends Controller
{
    public function index(){

        $kebabs = Kebab::all();
        
          return view('kebabs.index',[
            'kebabs' => $kebabs, 
          ]);
    }

    public function show($id){
        $kebab = Kebab::findOrFail($id);
  
          return view('kebabs.show', ['kebab' => $kebab]);
      }

    public function create(){
        return view('kebabs.create');
      }

      public function store(){
          
        $kebab = new Kebab();

        $kebab->name = request('name');
        $kebab->type = request('type');
        $kebab->base = request('base');
        $kebab->extra = request('extra');
         
        $kebab->save();
        
        return redirect('/')->with('mssg', 'Thank you for your order!');
      }
}
