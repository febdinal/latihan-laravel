<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableToko extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tokos')){
        Schema::create('tokos', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nama_toko');
            $table->string('alamat_toko');
            $table->integer('tlp_toko');
            $table->string('pemilik_toko');
           
        });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_toko');
    }
}
