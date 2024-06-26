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
            $table->string('nama_tempat');
            $table->bigInteger('kategori_id');
            $table->string('alamat');
            $table->string('gambar');
            $table->text('deskripsi')->nullable();
            $table->string('waktu_operasional')->nullable();
            $table->string('link_pendukung')->nullable();
            $table->decimal('latitude', 18, 16);
            $table->decimal('longitude', 19, 16);
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
