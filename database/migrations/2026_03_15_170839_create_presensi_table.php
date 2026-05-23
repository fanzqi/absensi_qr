<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('presensi', function (Blueprint $table) {
            $table->id();

            // relasi
            $table->unsignedBigInteger('siswa_id');
            $table->foreign('siswa_id')
                ->references('id')
                ->on('siswa')
                ->cascadeOnDelete();

            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->foreign('kelas_id')
                ->references('id')
                ->on('kelas')
                ->nullOnDelete();

            // QR session
            $table->string('qr_token'); // token unik dari QR

            // data presensi
            $table->date('tanggal');
            $table->time('jam_masuk')->nullable();

            $table->enum('status', ['hadir', 'izin', 'sakit', 'alpa'])->default('hadir');
            $table->text('keterangan')->nullable();

            $table->timestamps();

            // supaya 1 siswa tidak absen 2x di sesi yang sama
            $table->unique(['siswa_id', 'qr_token']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensi');
    }
};
