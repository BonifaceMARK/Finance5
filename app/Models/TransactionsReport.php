<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionsReport extends Model
{
    use HasFactory;

    protected $table = 'transactions_report_tbl';

    protected $fillable = [
        'reference',
        'productName', // Add productName attribute
        'transactionName',
        'paymentMethod', // Added paymentMethod attribute
        'cardType', // Added cardType attribute
        'transactionType',
        'transactionAmount',
        'transactionDate',
        'description', // Added description attribute
        'transactionStatus',
        'reasonForCancellation',
        'comment'
        // Add more fillable attributes if needed
    ];

    // You can define relationships or additional logic here
}
