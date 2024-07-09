<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
      $productos = Producto::all();
      return view('welcome', compact('productos'));
    }

    public function delete($id){
      $producto = Producto::find($id);
      $producto->delete();
      return back();
    }

    public function edit($id){
      $producto = Producto::find($id);
      return view('productos.producto', compact('producto'));
    }

    public function update($id, Request $request){
      $producto = Producto::find($id);
      $producto->producto = $request->prod;
      $producto->precio = $request->precio;
      $producto->cantidad = $request->cantidad;
      $producto->save();
      return redirect('/');

    }
    public function store(Request $request){
        $producto = new Producto();
        $producto->producto = $request->prod;
        $producto->precio = $request->precio;
        $producto->cantidad =  $request->cantidad;
        $producto->save();
        return back();
    }

}
