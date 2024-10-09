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
        Schema::create('reza_wirakusumas', function (Blueprint $table) {
            $table->id();
            $table->string('nidn')->unique(); // Set nidn to unique constraint
            $table->string('nama_dosen');
            $table->date('tgl_mulai_tugas');
            $table->string('jenjang_pendidikan');
            $table->string('bidang_keilmuan');
            $table->string('foto_dosen'); // Store the image path
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reza_wirakusumas');
    }
};
