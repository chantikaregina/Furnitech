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
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id_product')->primary()->autoIncrement();
            $table->string('product_name', 100);
            $table->text('deskripsi');
            $table->string('category', 100);
            $table->integer('harga');
            $table->enum('stock', ['Tersedia', 'Tidak Tersedia']);
            $table->string('foto');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
