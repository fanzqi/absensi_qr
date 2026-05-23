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
        Schema::create('wali_kelas', function (Blueprint $table) {
            $table->id();

            // relasi guru
            $table->unsignedBigInteger('guru_id');
            $table->foreign('guru_id')
                  ->references('id')
                  ->on('guru')
                  ->cascadeOnDelete();

            // relasi kelas
            $table->unsignedBigInteger('kelas_id');
            $table->foreign('kelas_id')
                  ->references('id')
                  ->on('kelas')
                  ->cascadeOnDelete();

            // tahun ajaran (opsional tapi penting)
            $table->string('tahun_ajaran')->nullable(); // contoh: 2025/2026

            $table->timestamps();

            // 1 guru tidak boleh jadi wali kelas ganda di kelas yang sama
            $table->unique(['guru_id', 'kelas_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wali_kelas');
    }
};
