<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performance', function (Blueprint $table) {
            $table->id();// id
            
            //id, nombre, genero, artista, presupuesto
            $table->string('name', 200)->unique();
            $table->string('category', 50)->nullable();
            $table->string('artist', 50);
            $table->decimal('budget', 9, 2);
            
            $table->timestamps();// Marcas de tiempo: 2
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('performance');
    }
}
