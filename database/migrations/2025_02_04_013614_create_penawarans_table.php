<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penawaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('barang_id')->constrained('barang_lelang')->onDelete('cascade');
            $table->integer('harga_tawaran');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penawaran');
    }
};
