<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('username')->unique();
            $table->string('password');

            // role user (SUDAH LENGKAP SEKARANG)
            $table->enum('role', [
                'admin',
                'guru',
                'wali_kelas',
                'guru_bk',
                'kespek',
                'siswa',
                'orang_tua'
            ]);

            // relasi opsional
            $table->unsignedBigInteger('siswa_id')->nullable();
            $table->unsignedBigInteger('guru_id')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};