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
        Schema::create('payables', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->string('description')->nullable();
            $table->string('bank_reference')->nullable();
            $table->decimal('amount',10,2);
            $table->timestamp('approved_date')->nullable();
            $table->foreignId('fund_settlement_id')->constrained('fund_settlements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payables');
    }
};
