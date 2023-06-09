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
        Schema::create('daily_cash_reports', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->foreignId('chart_id')->references('id')->on('charts');
=======
            $table->foreignId('chart_id')->references('id')->on('carts');
>>>>>>> origin/master
            $table->date('date');
            $table->string('description')->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_cash_reports');
    }
};
