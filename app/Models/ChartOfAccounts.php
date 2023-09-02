<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class ChartOfAccounts extends Model
{
    use NodeTrait;
    protected $fillable = [
       'name',
       'code',
       'category',
       'parent_id',
        '_lft',
        '_rgt',
    ];

}
