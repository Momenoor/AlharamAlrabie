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
        Schema::create('predefined_variant_product', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Product::class);
            $table->foreignIdFor(\App\Models\PredefinedVariant::class);
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_predefined_variants');
    }
};
