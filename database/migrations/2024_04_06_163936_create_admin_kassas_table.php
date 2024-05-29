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
        Schema::create('admin_kassas', function (Blueprint $table) {
            $table->id();
            $table->integer('filial_id');
            $table->integer('user_id');
            $table->integer('naqt')->nullable();
            $table->integer('plastik')->nullable();
            $table->integer('chegirma')->nullable();
            $table->integer('qaytarildi')->nullable();
            $table->integer('tashriflar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_kassas');
    }
};
