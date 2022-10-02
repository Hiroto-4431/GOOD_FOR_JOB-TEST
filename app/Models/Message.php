<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        // 'send_by',
        // 'receipt_by',
        'user_id',
        'company_id',
        'entry_id',
    ];
}
