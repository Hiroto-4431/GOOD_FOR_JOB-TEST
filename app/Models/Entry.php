<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'job_id'
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function message()
    {
        return $this->belongsTo(Message::class);
    }
}
