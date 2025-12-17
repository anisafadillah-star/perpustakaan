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
    Schema::create('buku', function (Blueprint $table) {
    $table->id('id_buku');
    $table->string('kode_buku', 50)->unique();
    $table->string('judul', 150);
    $table->string('penulis', 100)->nullable();
    $table->string('penerbit', 100)->nullable();
    $table->year('tahun_terbit')->nullable();
    $table->integer('stok_total')->default(0);
    $table->integer('stok_tersedia')->default(0);
    $table->string('rak_lokasi', 50)->nullable();
    $table->enum('status', ['tersedia','dipinjam','rusak','hilang'])->default('tersedia');
    $table->string('foto')->nullable();
    $table->timestamps();
});

}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
