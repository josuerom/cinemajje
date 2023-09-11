<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Pelicula;
use App\Http\Controllers\PeliculasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use View;

class CarritoController extends Controller
{
    public function añadirCarrito($id)
{

            $pelicula = Pelicula::find($id);

            if( ! $pelicula ){
                abort(404);
            }

            $carrito = session()->get('carrito');

            if( ! $carrito ){
            $carrito = array(
            $id => [
                "nombre" => $pelicula->nombre,
                "precio" => $pelicula->precio,
                "foto" => $pelicula->foto,

                "cantidad" => 1
                
            ]
            
            );

        

            session()->put('carrito', $carrito);
            return redirect()->back()->with('success', 'Ticket generado');
            }

            if(isset($carrito[$id])) {

            $carrito[$id]['cantidad']++;
            session()->put('carrito', $carrito);
            return redirect()->back()->with('success', 'Ticket generado');
            }

            $carrito[$id] = [
            "nombre" => $pelicula->nombre,
            "precio" => $pelicula->precio,
            "foto" => $pelicula->foto,
            "cantidad" => 1
            ];
         

            session()->put('carrito', $carrito);

            return back()
            ->with('exito','Ticket generado');

            }

     
            public function butaca()
            {
                
                return view( 'peliculas.butaca');
              
              
        
        
            }

            public function checkout()
            {
                
                    if (Auth::guest()) {
                        abort(403);
                    }

                return view( 'peliculas.checkout');
              
              
        
        
            }
        }
