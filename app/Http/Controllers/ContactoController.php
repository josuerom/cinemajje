<?php

namespace App\Http\Controllers;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index(){
        return view('contacto.index');
    }

    public function store(Request $request){
        $correo = new ContactoMailable($request->all());
        Mail::to('alfrejimenezgonzalez@gmail.com')->send($correo);
		return view( 'contacto.alenviarse');
    }
}
