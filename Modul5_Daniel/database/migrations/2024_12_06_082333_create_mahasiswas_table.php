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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id(column: 'id')->primaryKey;
            $table->string(column: 'nim')->unique();
            $table->string(column: 'nama_mahasiswa');
            $table->string(column: 'email')->unique();
            $table->string(column: 'jurusan')->unique();
            $table->unsignedBigInteger(column: 'dosen_id')->unique();
            $table->timestamps();

            $table->foreign('dosen_id')->references('id')->on('dosens')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
