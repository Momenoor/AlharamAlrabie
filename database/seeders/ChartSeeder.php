<?php

namespace Database\Seeders;

use App\Models\Chart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChartSeeder extends Seeder
{

    private $item = [
        ['name' => 'Sales', 'type' => 'income'],
        ['name' => 'Finance', 'type' => 'income'],
        ['name' => 'Contract', 'type' => 'income'],
        ['name' => 'Establishment', 'type' => 'expense'],
        ['name' => 'Operational', 'type' => 'expense'],
        ['name' => 'Purchases', 'type' => 'expense'],
        ['name' => 'General and Administration', 'type' => 'expense'],
        ['name' => 'Government', 'type' => 'expense'],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chart::insert($this->item);
<<<<<<< HEAD
        Chart::query()->update(['created_at' => now()]);
=======
>>>>>>> origin/master
    }
}
