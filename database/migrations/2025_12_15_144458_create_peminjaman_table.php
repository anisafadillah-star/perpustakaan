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
   Schema::create('peminjaman', function (Blueprint $table) {
    $table->id('id_peminjaman');
    $table->date('tgl_peminjaman');
    $table->date('tgl_deadline');

    $table->foreignId('id_user')
          ->nullable()
          ->constrained('users')
          ->nullOnDelete();

    $table->foreignId('id_buku')
          ->nullable()
          ->constrained('buku')
          ->nullOnDelete();

    $table->string('status', 50)->default('dipinjam');
    $table->timestamps();
});
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
