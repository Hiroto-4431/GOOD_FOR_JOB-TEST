<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'entry_id',
        'content',
        'send_by',
        'receive_by',
    ];
    protected $hidden = [
        'entry_id',
        'send_by',
        'receive_by',
    ];

    public function entries()
    {
        return $this->belongsTo(Entry::class);
    }
}
