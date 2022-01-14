<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->char('code',10);
            $table->integer('id_user');
            $table->integer('id_grapher');
            $table->integer('id_layanan');
            $table->date('tgl_kerja');
            $table->time('waktu_kerja');
            $table->char('lokasi',255);
            $table->integer('harga_order');
            $table->integer('tarif_grapher');
            $table->integer('laba');
            $table->char('status_order',15);
            $table->char('keterangan',255);
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
        Schema::dropIfExists('orders');
    }
}
