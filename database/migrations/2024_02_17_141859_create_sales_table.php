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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products');
            $table->decimal('qty',10,2);
            $table->decimal('rate',10,2);
            $table->string('status');
            $table->foreignId('quotation_id')->constrained('quotations');
            $table->foreignId('delivery_note_id')->constrained('delivery_notes');
            $table->foreignId('invoice_id')->constrained('invoices');
            $table->foreignId('stock_settlement_id')->constrained('stock_settlements');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
