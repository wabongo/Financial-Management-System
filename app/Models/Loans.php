<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{
    use HasFactory;
    protected $fillable = [
        'loan_Id',
        'borrower',
        'loan_amount',
        'interest_rate',
        'loan_type',
        'loan_term',
        'start_date',
        'end_date',
        'payment_frequency',
        'payment_amount',
        'outstanding_balance',
        'status',
        'last_updated',

    ];
}
