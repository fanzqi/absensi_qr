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
        Schema::create('mata_pelajaran', function (Blueprint $table) {
            $table->id();

            $table->string('kode_mapel')->unique(); // contoh: MTK, IPA, BIND
            $table->string('nama_mapel'); // Matematika, IPA, Bahasa Indonesia
            $table->integer('sks')->nullable(); // jam pelajaran / beban belajar

            // opsional: guru pengampu
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
        Schema::dropIfExists('mata_pelajaran');
    }
};
