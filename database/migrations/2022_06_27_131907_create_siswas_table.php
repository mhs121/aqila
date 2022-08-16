<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama_siswa');
            $table->string('alamat');
            $table->string('phone_siswa', 12);
            $table->string('sosmed');
            $table->enum('gender',['Laki-Laki','Perempuan']);
            $table->string('sekolah');
            $table->string('avatar');
            $table->string('nama_ortu');
            $table->string('alamat_ortu');
            $table->string('phone_ortu', 12);
            $table->string('pekerjaan');
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
        Schema::dropIfExists('siswas');
    }
}
