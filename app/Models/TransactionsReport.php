<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionsReport extends Model
{
    use HasFactory;

    protected $table = 'transactions_report_tbl';

    protected $fillable = [
        'productName', // Add productName attribute
        'transactionName',
        'transactionType',
        'transactionAmount',
        'transactionDate',
        'transactionStatus',
        'reasonForCancellation'
        // Add more fillable attributes if needed
    ];

    // You can define relationships or additional logic here
}
