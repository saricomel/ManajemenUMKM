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
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Jenis_Usaha_id');  // Relasi foreign key
            $table->foreignId('Status_Pembinaan_id');  // Relasi foreign key
            $table->string('Nama_Usaha');
            $table->string('Pemilik');
            $table->text('Alamat_Lengkap');
            $table->string('no_telpon');  // Ubah menjadi string untuk nomor telepon
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};