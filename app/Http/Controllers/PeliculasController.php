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
class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function todas()
    {
        
		$peliculas = DB::table('peliculas')->get();
		return view( 'peliculas.index', compact ('peliculas'));
      
      


    }
    
  
    public function index()
    {
        
		$peliculas = DB::table('peliculas')->where('exclusividad','si')->get();
		return view( 'peliculas.index', compact ('peliculas'));
      
      


    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
    {
       
        $pelicula=$request->all();
        if($archivo=$request->file('file')) {
            $nombre=$archivo->getClientOriginalName();
            $archivo->move('caratulas',$nombre);
            $pelicula['foto']=$nombre;
        
        }
        pelicula::create($pelicula);
		return redirect()->route('login'); 

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function show(Pelicula $pelicula)
    {
        return view ('peliculas.ver' , compact('pelicula'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function edit( Pelicula $pelicula)
    {
        if (Auth::guest()) {
            abort(403);
        }

        elseif
        (auth()->user()->can('administrar web')){
        return view ('peliculas.editar', compact('pelicula'));

        
        }
    abort(403);
    
    }
    
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Pelicula $pelicula)
    {
     $request->validate(
         [
            'nombre' => 'required', 
            'descripcion' => 'required', 
            'director' => 'required',
            'estudio' => 'required',
            'genero' => 'required',
            'duracion' => 'required',
            'trailer' => 'required',
            'precio' => 'required'



         ]
         );
         if($fotoeditada=$request->file('file')) {
            $nombre=$fotoeditada->getClientOriginalName();
            $fotoeditada->move('caratulas',$nombre);
            $pelicula['foto']=$nombre;
        
        }
         $pelicula->update($request->all());
         return redirect()->route ('peliculas.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelicula $pelicula)
    {   
        if
        (auth()->user()->can('administrar web')){
            $pelicula->delete();
            return redirect()->route ('peliculas.index');
    
        }
        
       
        abort(403);
      
    }




                
}
