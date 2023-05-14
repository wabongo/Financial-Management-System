<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'name',
        'contact',
        'balance',
        'payment_terms',
        'credit_limit',
        'payment_history',
        'notes',
    ];
}
