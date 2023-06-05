<?php

namespace App\Imports;

use App\Models\Sales;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SalesImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row): \Illuminate\Database\Eloquent\Model|Sales|null
    {
        if (empty($row['user'])) {
            dd($row);
        }
        return new Sales([
            'system_user' => $row['user'],
        ]);
    }
}
