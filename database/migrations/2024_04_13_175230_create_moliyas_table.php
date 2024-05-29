<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('moliyas', function (Blueprint $table) {
            $table->id();
            $table->integer('filial_id');
            $table->string('xodisa');
            $table->integer('summa');
            $table->string('type');
            $table->string('status');
            $table->string('about');
            $table->integer('user_id');
            $table->integer('admin_id')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void{
        Schema::dropIfExists('moliyas');
    }
};
