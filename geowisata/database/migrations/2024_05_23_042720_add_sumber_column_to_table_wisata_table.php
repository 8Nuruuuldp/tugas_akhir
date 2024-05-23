<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSumberColumnToTableWisataTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('table_wisata', function (Blueprint $table) {

            $table->string('sumber')->after('gambar');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_wisata', function (Blueprint $table) {

            $table->dropColumn('sumber');

        });
    }
};
