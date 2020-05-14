<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAlamatOnUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       if (Schema::hasColumn('alamat_toko', 'tlp_toko', 'pemilik_toko')){
        Schema::table('tokos', function (Blueprint $table){
        $table->string('alamat_toko')->nullable()->after('nama_toko');
        $table->integer('tlp_toko')->nullable()->after('alamat_toko');
        $table->string('pemilik_toko')->nullable()->after('tlp_toko');
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
        //
        Schema::table('Toko', function (Blueprint $table) {
            //
        });
    }
}
