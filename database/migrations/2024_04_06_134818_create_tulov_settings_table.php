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
        Schema::create('tulov_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('filial_id');
            $table->integer('tulov_summa');
            $table->integer('chegirma');
            $table->integer('admin_chegirma');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tulov_settings');
    }
};
