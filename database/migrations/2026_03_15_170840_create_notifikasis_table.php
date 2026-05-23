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
        Schema::create('notifikasi', function (Blueprint $table) {
            $table->id();

            // siapa penerima notifikasi
            $table->unsignedBigInteger('user_id')->nullable();

            // isi notifikasi
            $table->string('judul');
            $table->text('pesan');

            // tipe notifikasi (presensi, pengumuman, dll)
            $table->string('tipe')->nullable();

            // status dibaca / belum
            $table->boolean('dibaca')->default(false);

            // relasi (opsional kalau user sudah ada)
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifikasi');
    }
};
