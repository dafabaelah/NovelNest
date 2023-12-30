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
        Schema::disableForeignKeyConstraints();
        Schema::create('novels', function (Blueprint $table) {
            $table->id();
            $table->string('nama_novel');
            $table->string('gambar_novel')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_kategori');
            $table->text('deskripsi_novel');
            $table->integer('total_view_novel')->default(0);
            $table->foreign('id_user')->references('id')->on('users'); // Ubah 'users' sesuai dengan nama tabel pengguna
            $table->integer('total_like_novel')->default(0);
            $table->foreign('id_kategori')->references('id')->on('kategoris'); // Ubah 'categories' sesuai dengan nama tabel kategori
            $table->integer('jumlah_halaman_novel')->default(0);
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('novels');
    }
};
