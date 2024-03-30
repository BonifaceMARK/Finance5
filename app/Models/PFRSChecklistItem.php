<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PFRSChecklistItem extends Model
{
    use HasFactory;

    protected $table = 'pfrs_checklist_items';

    protected $fillable = [
        'department', // Department field
        'notes',      // Notes field
        'status',
    ];
}
