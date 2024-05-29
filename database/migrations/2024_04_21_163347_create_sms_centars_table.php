<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('sms_centars', function (Blueprint $table) {
            $table->id();
            $table->integer("filial_id");
            $table->string("tkun")->default('off');
            $table->string("tashrif")->default('off');
            $table->string("tulov")->default('off');
            $table->timestamps();
        });
    }
    public function down(): void{
        Schema::dropIfExists('sms_centars');
    }
};
