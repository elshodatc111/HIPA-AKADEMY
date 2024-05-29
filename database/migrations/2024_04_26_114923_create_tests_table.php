<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->integer('cours_id');
            $table->string('Savol');
            $table->string('TJavob');
            $table->string('NJavob1');
            $table->string('NJavob2');
            $table->string('NJavob3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
