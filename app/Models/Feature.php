<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    public function jobs()
    {
        return $this->belongsToMany(Job::class, 'feature_job')->withPivot(['id', 'job_id', 'feature_id']);
    }
}
