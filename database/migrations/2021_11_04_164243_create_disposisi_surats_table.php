<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisposisiSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disposisi_surats', function (Blueprint $table) {
            $table->id();
            $table->string('disposisi');
            $table->string('isi');
            $table->date('batas_waktu');
            $table->text('catatan');
            $table->enum('tipe',['Biasa','Penting','Segera','Rahasia']);
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
        Schema::dropIfExists('disposisi_surats');
    }
}
