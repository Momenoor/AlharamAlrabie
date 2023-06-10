<?php

namespace App\Imports;

use App\Models\Chart;
use App\Models\Product;
use App\Models\Income;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SalesImport implements ToModel, WithHeadingRow, WithChunkReading, WithBatchInserts, ShouldQueue
{
    /**
     * @param array $row
     *
     * @return Model|Income|null
     */
    public function model(array $row): Model|Income|null
    {

        $product = Product::where(['name' => $row['product'], 'category' => $row['sub_category']])->first();
        $chart = Chart::where('name', Income::SALES)->first();
        if (!$product) {
            dd($row);
        }

        return new Income([
            'transaction_number'    => $row['transaction_no'],
            'user_id'               => Auth::user()->id,
            'chart_id'              => $chart->id,
            'product_id'            => $product->id,
            'system_user'           => $row['user'],
            'type'                  => Income::SALES,
            'amount'                => $row['total'],
            'quantity'              => $row['quantity'],
            'unit_price'            => $row['faceamount'],
            'discount'              => $row['discount'],
            'description'           => 'Comments: ' . ($row['comments']) . ' - Notes: ' . ($row['notes']),
            'payment_method'        => $row['payment_modes'],
            'payment_number'        => $row['visa_transactionid'],
            'mobile_number'         => (Str::of($row['mobile_no'])->is('971')) ? null : $row['mobile_no'],
            'created_at'            => $row['transaction_date'],
        ]);
    }

    public function chunkSize(): int
    {
        return 100;
    }

    public function batchSize(): int
    {
        return 100;
    }
}
