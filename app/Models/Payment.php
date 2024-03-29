<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $fillable = [
        'payment_method', // Added payment_method to the fillable fields
        'card_number',
        'expiry_date',
        'cvv',
        'name_on_card',
    ];
}
