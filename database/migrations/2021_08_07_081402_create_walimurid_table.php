<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalimuridTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('walimurid', function (Blueprint $table) {
            $table->id();
            $table->string('nama_walimurid');
            $table->string('nama_siswa');
            $table->string('kelas');
            $table->text('keperluan');
            $table->string('tujuan');
            $table->integer('suhu_tubuh');
            $table->enum('status',['0', 'proses','selesai']);
            $table->date('tgl_post');
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
        Schema::dropIfExists('walimurid');
    }
}
