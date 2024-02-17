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
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->string('po_no');
            $table->string('reference')->nullable();
            $table->string('status');
            $table->foreignId('supplyer_id')->constrained('supplyers');
            $table->foreignId('fund_settlement_id')->constrained('fund_settlements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_orders');
    }
};
