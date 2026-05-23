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
        Schema::create('guru_bk', function (Blueprint $table) {
            $table->id();

            // relasi ke tabel guru
            $table->unsignedBigInteger('guru_id');
            $table->foreign('guru_id')
                  ->references('id')
                  ->on('guru')
                  ->cascadeOnDelete();

            // data tambahan BK
            $table->string('nip')->nullable();
            $table->string('nama');
            $table->string('no_hp', 20)->nullable();
            $table->text('alamat')->nullable();

            // spesialisasi BK (opsional)
            $table->string('spesialisasi')->nullable();
            // contoh: konseling remaja, disiplin, akademik

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru_bk');
    }
};
