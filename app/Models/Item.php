<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'price',
        'image_url',
        'seller',
    ];

    /**
     * Get the seller of the item.
     */
    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }
}
