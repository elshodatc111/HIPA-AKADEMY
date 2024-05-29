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
        Schema::create('filial_kassas', function (Blueprint $table) {
            $table->id();
            $table->integer('filial_id');
            $table->integer('tulov_naqt')->nullable();
            $table->integer('tulov_naqt_chiqim')->nullable();
            $table->integer('tulov_naqt_chiqim_tasdiqlandi')->nullable();
            $table->integer('tulov_plastik')->nullable();
            $table->integer('tulov_plastik_chiqim')->nullable();
            $table->integer('tulov_plastik_chiqim_tasdiqlandi')->nullable();
            $table->integer('tulov_chegirma')->nullable();
            $table->integer('tulov_naqt_xarajat')->nullable();
            $table->integer('tulov_naqt_xarajat_tasdiqlandi')->nullable();
            $table->integer('tulov_plastik_xarajat')->nullable();
            $table->integer('tulov_plastik_xarajat_tasdiqlandi')->nullable();
            $table->integer('tulov_naqt_ish_haqi')->nullable();
            $table->integer('tulov_plastik_ish_haqi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filial_kassas');
    }
};
