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
        Schema::table('accounts', function (Blueprint $table) {
            $table->decimal('balance', 10, 2)->default(0)->change();
            $table->foreignId('parent_id')->after('name')->nullable()->references('id')->on('accounts')->nullOnDelete();
            $table->dropColumn('category_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Category::class);
            $table->dropColumn('parent_id');
        });
    }
};
