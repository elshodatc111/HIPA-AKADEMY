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
        Schema::create('test_natijas', function (Blueprint $table) {
            $table->id();
            $table->integer('filial_id');
            $table->integer('guruh_id');
            $table->integer('user_id');
            $table->integer('savol_count');
            $table->integer('tugri_count');
            $table->integer('notugri_count');
            $table->integer('ball');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_natijas');
    }
};
