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
        Schema::create('guruhs', function (Blueprint $table) {
            $table->id();
            $table->integer('filial_id');
            $table->integer('techer_id');
            $table->integer('cours_id');
            $table->integer('room_id');
            $table->string('guruh_name');
            $table->integer('guruh_price');
            $table->integer('guruh_chegirma');
            $table->integer('guruh_admin_chegirma');
            $table->integer('techer_price');
            $table->integer('techer_bonus');
            $table->string('guruh_status');
            $table->string('guruh_start');
            $table->string('guruh_end')->nullable();
            $table->string('guruh_vaqt');
            $table->string('admin_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guruhs');
    }
};
