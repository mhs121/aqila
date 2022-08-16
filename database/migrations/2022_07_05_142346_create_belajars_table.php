<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBelajarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belajars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama_siswa');
            $table->string('nama_tutor');
            $table->string('mapel');
            $table->string('tingkatan');
            $table->string('materi');
            $table->string('waktu');
            $table->string('paket');
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
        Schema::dropIfExists('belajars');
    }
}
