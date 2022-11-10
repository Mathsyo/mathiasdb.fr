<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public $fillable = [
        'email',
        'content',
    ];

    public static $rules = [
        'email' => 'required|email',
        'content' => 'required',
    ];
}
