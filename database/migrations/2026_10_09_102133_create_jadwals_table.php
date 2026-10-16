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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id('jadwalID');
            $table->string('hari', 6)->nullable();
            $table->char('waktu',11)->default('07:00-10.20');
            $table->char('kodeMk',6)->nullable();
            $table->char('grup',1)->nullable();
            $table->char('nik',7)->nullable();
            $table->string('ruang',25);
            $table->timestamps();

            $table->foreign('kodeMk')
                ->references('kodeMk')
                ->on('matakuliahs')
                ->restrictOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
