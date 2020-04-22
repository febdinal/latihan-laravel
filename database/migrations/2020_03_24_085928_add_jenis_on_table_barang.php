<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddJenisOnTableBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('barangs', function (Blueprint $table){
            //
        $table->string('jenis_barang')->nullable()->after('nama_barang');
        $table->string('jumlah_barang')->nullable()->after('jenis_barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('Barang', function (Blueprint $table) {
            //
        });
    }
}
