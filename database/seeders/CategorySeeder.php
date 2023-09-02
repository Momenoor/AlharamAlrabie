<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Assets',
            'Liabilities',
            'Equity',
            'Income',
            'Cost of Goods Sold (COGS)',
            'Operating Expenses',
            'Other Expenses',
            'Tax',
        ];
        foreach ($categories as $category) {
            \App\Models\Category::create(['name' => $category]);
        }
    }
}
