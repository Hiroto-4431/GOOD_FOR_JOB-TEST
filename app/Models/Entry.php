<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Notifications\Registered;

class Entry extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'user_id',
        'job_id'
    ];
    public function registered($val)
    {
        $this->notify(new Registered($val));
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function message()
    {
        return $this->belongsTo(Message::class);
    }
}
