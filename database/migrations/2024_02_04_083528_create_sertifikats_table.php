<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertifikats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_peserta')->constrained('pesertas');
            $table->string('deskripsi');
            $table->string('nama_ceo');
            $table->string('nama_mentor');
            $table->string('nama_instansi');
            $table->string('tempat');
            $table->date('tanggal');
            $table->string('gambar_ttdceo');
            $table->string('gambar_ttdmentor');
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
        Schema::dropIfExists('sertifikats');
    }
};
