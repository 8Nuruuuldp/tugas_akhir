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
        Schema::create('table_wisata', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('nama_tempat');
            $table->string('alamat');
            $table->string('deskripsi');
            $table->text('gambar');
            $table->decimal('latitude', 17, 16);
            $table->decimal('longitude', 17, 14);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_wisata');
    }
};
