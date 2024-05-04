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
        Schema::create('table_ulasan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wisata_id') // foreign key
                  ->constrained('table_wisata')
                  ->onDelete('cascade');
            $table->unsignedInteger('rating');
            $table->text('ulasan');
            $table->string('nama_pengulas');
            $table->string('email_pengulas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_ulasan');
    }
};
