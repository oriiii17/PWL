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
        Schema::table('users', function (Blueprint $table) {
            //Tambahkan NIM
            $table->string('nim')
            ->unique()
            ->nullable()
            ->after('id');

            //Tambahkan atribut role
            $table->string('role')
            ->default('mahasiswa')
            ->after('password');

            //Karena teruhubung dengan tabel mahasiswa maka perlu untuk memanggil foreignkey dari tabel mahasiswa
            $table->foreign('nim')
            ->references('nim')
            ->on('mahasiswas')
            ->onUpdate('cascade')
            ->onDeleter('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
