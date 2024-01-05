<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up(): void
    {
        Schema::create('tbuser', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap', 50);
            $table->enum('jeniskelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('username', 50);
            $table->string('katasandi', 225);
            $table->enum('level', ['Administrator', 'Kepala TU', 'Karyawan']);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('tbuser');
    }
};
