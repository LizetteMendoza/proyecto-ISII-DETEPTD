<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('curp',18);
            $table->string('direccion');
            $table->integer('imf');
            $table->smallInteger('edad');
            $table->string('telefono',10);
            $table->string('sexo');
            $table->string('limitacion');
            $table->string('escolaridad');
            $table->string('plantel');
            $table->string('etnia');
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //onUpdate('cascade') en caso de que cambien el id
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
        Schema::dropIfExists('applications');
    }
};
