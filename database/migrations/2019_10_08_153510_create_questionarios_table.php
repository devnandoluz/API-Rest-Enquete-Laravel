<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 455)->nullable();
            $table->string('descricao');            
            $table->timestamps();
            $table->unsignedInteger('usuarios_id');
            $table->unsignedInteger('tipos_id');
        });
        Schema::table('questionarios', function(Blueprint $table){
            $table->foreign('usuarios_id')->references('id')->on('usuarios');
            $table->foreign('tipos_id')->references('id')->on('tipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionarios');
    }
}
