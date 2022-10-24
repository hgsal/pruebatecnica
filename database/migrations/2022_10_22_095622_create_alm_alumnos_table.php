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
        Schema::create('alm_alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('alm_codigo',100)->unique();
            $table->string('alm_nombre',300);
            $table->tinyInteger('alm_edad')->nullable();
            $table->string('alm_sexo',100)->nullable();
            $table->foreignId('grd_grado_id')->constrained('grd_grados');
            $table->text('alm_observacion',300)->nullable();
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
        Schema::dropIfExists('alm_alumnos');
    }
};
