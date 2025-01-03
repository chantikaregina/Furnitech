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
        Schema::create('company_infos', function (Blueprint $table) {
            $table->integer('id_company_info')->primary()->autoIncrement();
            $table->string('company_name', 100);
            $table->string('slogan', 150);
            $table->text('deskripsi');
            $table->integer('tahun_berdiri');
            $table->string('alamat', 100);
            $table->string('email', 100);
            $table->string('telepon', 12);
            $table->string('logo')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_infos');
    }
};
