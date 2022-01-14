<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrapherProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grapher_profiles', function (Blueprint $table) {
            $table->id();
            $table->char('tmpt_lahir',255);
            $table->date('tgl_lahir');
            $table->integer('tlp');
            $table->char('alamat', 255);
            $table->char('foto', 255);
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
        Schema::dropIfExists('grapher_profiles');
    }
}
