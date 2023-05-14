<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Savings extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_Id',
        'account_holder',
        'account_type',
        'account_number',
        'bank_name',
        'balance',
        'interest_rate',
        'start_date',
        'end_date',
        'status',
        'last_updated',
    ];
}
