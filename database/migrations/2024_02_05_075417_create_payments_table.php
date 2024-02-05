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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')->constrained();
            $table->string('photo_evidence'); // bukti verifikasi pembayaran berupa foto
            $table->enum('stat',['Diterima', 'Ditolak', 'Pemesanan'])->default('Pemesanan'); // verifikasi pembayaran dengan admin
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
