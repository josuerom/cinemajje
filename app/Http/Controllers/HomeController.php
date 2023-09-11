<?php

namespace App\Http\Controllers;
use App\Models\Pelicula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Role::create(['name'=>'administrador']);  //para crear nuevo rol en gtb
        //Permission::create(['name' => 'administrar web']); //pa crear su permiso
        //$role = Role::findById(2);
        //$permission = Permission::findById(2);
        //$role->givePermissionTo($permission);


        //esto pal modelo

        //model_has_permissions 

        //auth()->user()->givePermissionTo('visualizar web');
       
        //y este el has_roles
        //auth()->user()->assignRole('cliente');
//comprobarlo
        //return auth()->user()->permissions;
//para consola tinker buscar ids y cambiar rols >>> $user = User::find(11);
//$user->assignRole('administrador') asi se lo asigno
		$peliculas = DB::table('peliculas')->get();

		return view( 'peliculas.index', compact ('peliculas'));
    }
}
