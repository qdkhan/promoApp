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
        Schema::create('ordered_product_attributes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained();
            $table->foreignId('supplier_id')->constrained();
            $table->string('part_id');
            $table->string('size', 20);
            $table->string('color', 25);
            $table->mediumInteger('quantity')->default(0);
            $table->string('order_number')->nullable();
            $table->string('transaction_number', 100)->nullable();
            $table->string('so_number', 50)->nullable();
            $table->string('po_number', 50)->nullable();
            $table->string('carrier', 50)->nullable();
            $table->string('tracking_number', 100)->nullable();
            $table->string('uom')->default('EA');
            $table->string('order_status', 50)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordered_product_attributes');
    }
};
