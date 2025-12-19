<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cardapios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('semana_id');
                  
            $table->foreignId('prato_id');
                  
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cardapios');
    }
};

