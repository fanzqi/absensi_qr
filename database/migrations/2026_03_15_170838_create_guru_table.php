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
        Schema::create('guru', function (Blueprint $table) {
            $table->id();

            $table->string('nip')->unique(); // Nomor Induk Pegawai
            $table->string('nama');
            $table->string('jenis_kelamin', 10)->nullable(); // L/P
            $table->string('mapel')->nullable(); // Mata pelajaran
            $table->text('alamat')->nullable();
            $table->string('no_hp', 20)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('pendidikan_terakhir')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru');
    }
};
