<?php

namespace App\Imports;

use App\Models\Chart;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ChartImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Chart([
            'name' => $row['name'],
            'type' => $row['category'],
        ]);
    }
}
