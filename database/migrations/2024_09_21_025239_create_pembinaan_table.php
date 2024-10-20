<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembinaanTable extends Migration
{
    public function up()
    {
        Schema::create('pembinaan', function (Blueprint $table) {
            $table->id();
            $table->string('kegiatan');
            $table->date('tanggal');
            $table->string('hasil_pembinaan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pembinaan');
    }
}
