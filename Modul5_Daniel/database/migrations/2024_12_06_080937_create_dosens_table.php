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
        Schema::create('dosens', function (Blueprint $table) {
            $table->id(column: 'id')->primaryKey;
            $table->string(column: 'kode_dosen', length: 3)->unique();
            $table->string(column: 'nama_dosen',);
            $table->integer(column: 'nip')->unique();
            $table->string(column: 'email')->unique();
            $table->integer(column: 'no_telp')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};
