<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotographersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photographers', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pg');
            $table->char('nama',255);
            $table->char('tempat_lahir',255);
            $table->date('tgl_lahir');
            $table->char('tlp',255);
            $table->integer('tarif');
            $table->text('alamat');
            $table->char('foto',255);
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
        Schema::dropIfExists('photographers');
    }
}
