<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kespek', function (Blueprint $table) {
            $table->id();

            // siswa yang melanggar
            $table->unsignedBigInteger('siswa_id');
            $table->foreign('siswa_id')
                  ->references('id')
                  ->on('siswa')
                  ->cascadeOnDelete();

            // guru BK / kesiswaan yang menangani
            $table->unsignedBigInteger('guru_bk_id')->nullable();
            $table->foreign('guru_bk_id')
                  ->references('id')
                  ->on('guru_bk')
                  ->nullOnDelete();

            // data pelanggaran
            $table->string('jenis_pelanggaran');
            $table->text('keterangan')->nullable();

            // poin pelanggaran
            $table->integer('poin')->default(0);

            // tindakan yang diberikan
            $table->string('tindakan')->nullable();

            // tanggal kejadian
            $table->date('tanggal');

            // status tindak lanjut
            $table->enum('status', ['proses', 'selesai'])->default('proses');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kespek');
    }
};
