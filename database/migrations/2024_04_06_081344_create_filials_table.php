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
        Schema::create('filials', function (Blueprint $table) {
            $table->id();
            $table->string('filial_name');
            $table->string('filial_addres');
            $table->integer('naqt')->nullable();
            $table->integer('xarajat_naqt')->nullable();
            $table->integer('plastik')->nullable();
            $table->integer('xarajat_plastik')->nullable();
            $table->integer('payme')->nullable();
            $table->integer('xarajat_payme')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filials');
    }
};
