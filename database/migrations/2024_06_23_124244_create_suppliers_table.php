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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('api_key', 50);
            $table->string('password', 100);
            $table->string('inventory_endpoint', 255);
            $table->string('po_endpoint', 255);
            $table->string('shipment_endpoint', 255);
            $table->string('order_status_endpoint', 255);
            $table->string('tolerance')->nullable();
            $table->string('carrier')->nullable();
            $table->string('service')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
