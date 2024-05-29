<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('murojats', function (Blueprint $table) {
            $table->id();
            $table->integer('filial_id');
            $table->integer('user_id');
            $table->string('user_type');
            $table->integer('admin_id');
            $table->string('admin_type');
            $table->string('status');
            $table->string('text');
            $table->timestamps();
        });
    }
    public function down(): void{
        Schema::dropIfExists('murojats');
    }
};
