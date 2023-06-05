<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_number')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('chart_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->string('system_user')->nullable();
            $table->string('type')->comment('talabat, visa, cash, finance');
            $table->string('amount');
            $table->integer('quantity')->nullable();
            $table->decimal('unit_price', 15, 2)->nullable();
            $table->decimal('discount', 15, 2)->nullable();
            $table->string('description');
            $table->string('payment_method')->comment('Card, cash, transfer');
            $table->string('payment_number')->nullable();
            $table->string('mobile_number')->nullable();
            $table->index('transaction_number');
            $table->index('type');
            $table->index('user_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
