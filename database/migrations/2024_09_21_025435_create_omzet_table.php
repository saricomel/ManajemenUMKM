<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOmzetTable extends Migration
{
    public function up()
    {
        Schema::create('omzet', function (Blueprint $table) {
            $table->id();
            $table->foreignId('umkm_id')->constrained('umkm')->onDelete('cascade');
            $table->date('priodi');
            $table->double('jumlah_omzet');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('omzet');
    }
}
