<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void
    {
        Schema::create('tulovs', function (Blueprint $table) {
            $table->id();
            $table->integer('filial_id');
            $table->integer('user_id');
            $table->string('guruh_id');
            $table->integer('summa');
            $table->string('type');
            $table->string('status');
            $table->string('about')->nullable();
            $table->integer('admin_id');
            $table->timestamps();
        });
    }

    public function down(): void{
        Schema::dropIfExists('tulovs');
    }
};
