<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up(): void{
        Schema::create('mavjud_ish_haqis', function (Blueprint $table) {
            $table->id();
            $table->integer('filial_id');
            $table->string('naqt');
            $table->string('plastik');
            $table->timestamps();
        });
    }

    public function down(): void{
        Schema::dropIfExists('mavjud_ish_haqis');
    }
};
