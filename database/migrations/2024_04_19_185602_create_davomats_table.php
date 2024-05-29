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
        Schema::create('davomats', function (Blueprint $table) {
            $table->id();
            $table->integer('filial_id');
            $table->integer('guruh_id');
            $table->integer('user_id');
            $table->string('dates');
            $table->string('status');
            $table->string('techer_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('davomats');
    }
};
