<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('diskon', function (Blueprint $table) {
            $table->increments('diskon_id');
            $table->string('kode_diskon', 50)->unique();
            $table->string('nama_diskon', 150);
            $table->unsignedTinyInteger('persentase');
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->enum('status', ['Aktif', 'Nonaktif'])->default('Aktif');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('diskon');
    }
};
