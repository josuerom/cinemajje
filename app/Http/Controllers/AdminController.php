<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guest()) {
            abort(403);
        }

        elseif
        (auth()->user()->can('administrar web')){
         $usuarios = DB::table('users')->get();
         $peliculas = DB::table('peliculas')->get();
         $count = DB::table('users')->count();
         $count2 = DB::table('peliculas')->count();
         $pedidos = DB::table('pedidos')->get();
         $count3 = DB::table('pedidos')->count();
        return view( 'adminalfredo.panel', compact ('usuarios', 'peliculas', 'count', 'count2' , 'count3'));

        
        }
    abort(403);
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::guest()) {
            abort(403);
        }

        elseif
        (auth()->user()->can('administrar web')){
        return view ('adminalfredo.crear');

        
        }
    abort(403);

    }
    public function clientes()
    {
        if (Auth::guest()) {
            abort(403);
        }

        elseif
        (auth()->user()->can('administrar web')){
        $usuarios = DB::table('users')->get();
        return view( 'adminalfredo.clientes', compact ('usuarios' ));

        
        }
    abort(403);
    
    }


    public function cartelera()
    {
        if (Auth::guest()) {
            abort(403);
        }

        elseif
        (auth()->user()->can('administrar web')){
        $peliculas = DB::table('peliculas')->get();
        return view( 'adminalfredo.cartelera', compact ('peliculas'));
        
        }
    abort(403);

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
    public function show($id)
    {
        //
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
