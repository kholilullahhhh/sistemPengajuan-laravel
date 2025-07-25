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
        Schema::create('keluhans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pelanggan');
            $table->integer('id_kategori');
            $table->text('keluhan');
            $table->string('foto_bukti_keluhan')->nullable();
            $table->string('foto_bukti_pelanggan')->nullable();
            $table->date('tgl_keluhan');
            $table->enum('status_keluhan', ['Pending', 'Diproses', 'Selesai']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluhans');
    }
};
