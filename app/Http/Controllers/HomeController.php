<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __invoke($nombre = null){
        // return view('index')->with('name',$nombre);
        // return view('index')->with(['name'=>$nombre,'titulo'=>$encabezado]);
        //return view('index',['name'=>$nombre,'titulo'=>$encabezado,'temas'=>$proyectos]);
        //return view('index', compact('nombre','encabezado','proyectos'));
        $productos = \DB::table('productos')
                    ->select('productos.*')
                    ->orderby('modelo','ASC')
                    ->get();

        return view('index', compact('nombre'))->with('productos', $productos);
    }
   
}
