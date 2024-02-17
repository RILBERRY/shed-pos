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
        Schema::create('supplyers', function (Blueprint $table) {
            $table->id();
            $table->string('supplyer_code');
            $table->string('name');
            $table->string('tin')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->boolean('is_blocked')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplyers');
    }
};
