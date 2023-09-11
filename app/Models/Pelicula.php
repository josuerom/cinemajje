<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
	protected $fillable = [
	'nombre',
	'descripcion',
	'director',
	'estudio',
	'genero',
	'duracion',
	'trailer',
	'exclusividad',
	'foto',
	'precio'
];

}
