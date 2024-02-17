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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->string('invoice_no');
            $table->string('status');
            $table->foreignId('customer_id')->constrained('customers');
            $table->foreignId('quotation_id')->constrained('quotations');
            $table->foreignId('delivery_note_id')->constrained('delivery_notes');
            $table->foreignId('stock_settlement_id')->constrained('stock_settlements');
            $table->foreignId('fund_settlement_id')->constrained('fund_settlements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
