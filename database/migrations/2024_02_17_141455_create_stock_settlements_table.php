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
        Schema::create('stock_settlements', function (Blueprint $table) {
            $table->id();
            $table->decimal('openning',10,2);
            $table->decimal('in',10,2);
            $table->decimal('out',10,2);
            $table->decimal('balance',10,2);
            $table->decimal('diff',10,2);
            $table->boolean('is_settled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_settlements');
    }
};
