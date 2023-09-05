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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->foreignIdFor(\App\Models\Account::class);
            $table->dateTime('date');
            $table->decimal('amount',10,2);
            $table->decimal('discount',10,2);
            $table->string('description');
            $table->foreignIdFor(\App\Models\Category::class);
            $table->foreignIdFor(\App\Models\User::class);
            $table->string('status');
            $table->string('service_type')->nullable();
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
