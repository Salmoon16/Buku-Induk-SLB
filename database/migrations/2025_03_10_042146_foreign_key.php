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
        Schema::table('siswas', function (Blueprint $table) {
            $table->foreign('kelas_id')->after('id')->references('id')->on('kelas')->onDelete('set null');
        });

        Schema::table('raports', function (Blueprint $table) {
            $table->foreign('siswa_id')->after('id')->references('id')->on('siswas')->onDelete('set null');
        });

        Schema::table('presentasis', function (Blueprint $table) {
            $table->foreign('siswa_id')->after('id')->references('id')->on('siswas')->onDelete('set null');
        });

        Schema::table('ijazahs', function (Blueprint $table) {
            $table->foreign('siswa_id')->after('id')->references('id')->on('siswas')->onDelete('set null');
        });

        Schema::table('absensis', function (Blueprint $table) {
            $table->foreign('siswa_id')->after('id')->references('id')->on('siswas')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
