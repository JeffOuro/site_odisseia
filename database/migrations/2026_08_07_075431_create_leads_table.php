<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // newsletter ou curso
            $table->string('nome');
            $table->string('email');
            $table->string('whatsapp')->nullable();
            $table->string('nivel')->nullable();
            $table->string('temas')->nullable();
            $table->string('formato')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
