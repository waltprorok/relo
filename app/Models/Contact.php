<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'email',
        'phone',
        'current_zip_code',
        'moving_to_city',
        'message',
        'replied',
    ];

    protected $casts = [
        'replied' => 'boolean',
        'created_at' => 'datetime',
    ];
}
