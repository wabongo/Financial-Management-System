<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'purchase_price',
        'current_value',
        'depreciation_rate',
        'useful_life',
    ];
}
