<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tbjadwal', function (Blueprint $table) {
            $table->id();
            $table->integer('iduser');
            $table->string('blokruang', 100);
            $table->enum('keterangan', [1, 0]);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbjadwal');
    }
};
