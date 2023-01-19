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
        Schema::table('decoraciones', function (Blueprint $table) {
            //
            $table->string('imagen', 150)->after('categoria');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('decoraciones', function (Blueprint $table) {
            //
            $table->dropColumn('imagen');
        });
    }
};
