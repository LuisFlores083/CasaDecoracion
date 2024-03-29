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
        Schema::create('decoraciones', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('nombre',50);
            $table->text('descripcion', 64);
            $table->string('categoria', 60);
            $table->softDeletes('softDeletes');
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
        Schema::dropIfExists('decoraciones');
    }
};
