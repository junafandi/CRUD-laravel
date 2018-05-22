<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idNama');
            $table->string('namaBarang');
            $table->string('jumlah');
            $table->timestamps();
            
        
        });

        Schema::table('barang', function (Blueprint $table) {
            $table->foreign('idNama')->references('id')->on('isi');     
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('barang', function (Blueprint $table) {
            $table->dropForeign('barang_idNama_foreign');     
        });
        Schema::dropIfExists('barang');
    }
}
