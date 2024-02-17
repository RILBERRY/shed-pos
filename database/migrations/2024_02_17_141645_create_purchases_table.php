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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->decimal('qty',10,2);
            $table->decimal('rate',10,2);
            $table->string('status');
            $table->foreignId('purchase_order_receive_note_id')->constrained('purchase_order_receive_notes');
            $table->foreignId('product_id')->constrained('products');
            $table->foreignId('purchase_order_id')->constrained('purchase_orders');
            $table->foreignId('stock_settlement_id')->constrained('stock_settlements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
