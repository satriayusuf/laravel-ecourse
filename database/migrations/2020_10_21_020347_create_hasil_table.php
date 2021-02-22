<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('namahasil');
            $table->string('dokumenhasil');
            $table->string('status');
            $table->string('namauser');
            $table->string('sertifikat');

            $table->unsignedBigInteger('id_materi')->nullable();
            $table->foreign('id_materi')->references('id')->on('materi');
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
        Schema::dropIfExists('hasil');
    }
}
