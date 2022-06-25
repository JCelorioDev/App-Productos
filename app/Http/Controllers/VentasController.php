<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use Illuminate\Http\Request;

class VentasController extends Controller
{
   public function Index(){
    $V = Ventas::all();
    return view('Ventas.ventanaprincipal',compact('V'));
   }

   public function Save(Request $request){
    $V = new Ventas();
    $V->Nombre_Producto = $request->nombre_produc;
    $V->Descripcion_Producto = $request->descripcion_produc;
    $V->Cantidad_Producto = $request->cantidad_produc;
    $V->Imagen_Producto = $request->imagen_produc;
    $V->save();
    return back();
   }

   public function Edit($Id){
    $V = Ventas::find($Id);
    return view('Ventas.ventanasecundaria',compact('V'));
   }

   public function Actualizar(Request $request,$Id){
    $V = Ventas::find($Id);
    $V->Nombre_Producto = $request->nombre_produc;
    $V->Descripcion_Producto = $request->descripcion_produc;
    $V->Cantidad_Producto = $request->cantidad_produc;
    $V->Imagen_Producto = $request->imagen_produc;
    $V->save();
    return redirect('Productos');
   }
}
