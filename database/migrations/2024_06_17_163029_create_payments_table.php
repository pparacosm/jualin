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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('sale_id')->nullable();
            $table->dateTime('date')->nullable();
            $table->decimal('amount')->nullable();
            $table->enum('payment_method', array('credit_card','debit_card', 'transfer_bank', 'eWallet', 'qris'))->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
