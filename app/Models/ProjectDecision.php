<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDecision extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'decision',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_name', 'project_name');
    }
}

