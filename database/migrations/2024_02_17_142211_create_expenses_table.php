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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->foreignId('supplyer_id')->constrained('supplyers');
            $table->string('reference')->nullable();
            $table->decimal('total',10,2);
            $table->decimal('tax',10,2)->nullable();
            $table->boolean('is_tax_clamed')->default(false);
            $table->string('status');
            $table->foreignId('fund_settlement_id')->constrained('fund_settlements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
