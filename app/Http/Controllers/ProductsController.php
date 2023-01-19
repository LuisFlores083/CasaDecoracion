<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Decoracione;

class ProductsController extends Controller
{
    //Invoke
    public function __invoke(){
       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $decoraciones = \DB::table('decoraciones')
        ->select('decoraciones.*')
        ->orderby('id','ASC')
        ->get();
        //
        return view('product')->with('decoraciones', $decoraciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return 'Aquí puedes crear productos con tus diseños o crear espacios de venta para tus productos';
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($categoria)
    {
        //
        $datos = Producto::select('modelo','nombre','categoria','imagen')->get();
        $decoraciones = \DB::table('decoraciones')
        ->select('decoraciones.*')
        ->get();

        return view('Productos.mostrarProductos')->with('productos', $datos)->with(['categoria'=>$categoria,'decoraciones'=>$decoraciones]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
