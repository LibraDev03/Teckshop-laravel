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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name_orderer');
            $table->string('name_consignee'); 
            $table->string('phone_consignee', 15); 
            $table->string('email_orderer', 255); 
            $table->string('address_consignee'); 
            $table->text('order_notes')->nullable(); 
            $table->string('payment_method'); 
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
