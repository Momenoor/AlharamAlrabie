<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    const SALES = 'Sales';
    const FINANCE = 'Finance';
    const CONTRACT = 'Contract';

    protected $fillable = [
        'transaction_number',
        'user_id',
        'chart_id',
        'product_id',
        'system_user',
        'type',
        'amount',
        'quantity',
        'unit_price',
        'discount',
        'description',
        'payment_method',
        'payment_number',
        'mobile_number',
    ];
}
