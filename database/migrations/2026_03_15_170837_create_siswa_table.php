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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();

            $table->string('nis')->unique(); // Nomor Induk Siswa
            $table->string('nama');
            $table->string('jenis_kelamin', 10)->nullable(); // L/P
            $table->text('alamat')->nullable();
            $table->string('tempat')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('kelas')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};