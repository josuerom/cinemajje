<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
			$table->string('nombre', '40');
			$table->string('descripcion', '600');
			$table->string('director', '25');
			$table->string('estudio', '35');
            $table->string('genero', '15');
            $table->decimal('precio', 12,2)->default(0);
			$table->string('duracion', '3');
			$table->string('trailer', '60');
            $table->string('portada', '60');
            $table->string('exclusividad', '2');
            $table->string('foto', '60');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}
