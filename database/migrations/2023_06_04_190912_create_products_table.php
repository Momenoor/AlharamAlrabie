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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->foreignIdFor(\App\Models\Account::class)->nullable()->constrained()->onUpdate('cascade')->onDelete('set null');
            $table->foreignIdFor(\App\Models\Category::class)->nullable()->constrained()->onUpdate('cascade')->onDelete('set null');
            $table->string('slug')->nullable();
            $table->string('type')->nullable();
            $table->string('image')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->boolean('is_show_in_menu')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
