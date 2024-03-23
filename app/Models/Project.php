<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['project_name', 'start_date', 'end_date'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
