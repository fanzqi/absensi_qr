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
        Schema::create('qr_codes', function (Blueprint $table) {
            $table->id();

            // relasi ke kelas (QR biasanya untuk presensi kelas tertentu)
            $table->unsignedBigInteger('kelas_id');
            $table->foreign('kelas_id')
                  ->references('id')
                  ->on('kelas')
                  ->cascadeOnDelete();

            // token unik untuk QR
            $table->string('token')->unique();

            // waktu berlaku QR
            $table->dateTime('expired_at')->nullable();

            // status QR (aktif / nonaktif)
            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');

            // dibuat oleh guru (opsional)
            $table->unsignedBigInteger('guru_id')->nullable();
            $table->foreign('guru_id')
                  ->references('id')
                  ->on('guru')
                  ->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qr_codes');
    }
};
