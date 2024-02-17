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
        Schema::create('fund_settlements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fund_id')->constrained('funds');
            $table->decimal('openning',10,2);
            $table->decimal('in',10,2);
            $table->decimal('out',10,2);
            $table->decimal('balance',10,2);
            $table->decimal('diff',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fund_settlements');
    }
};
