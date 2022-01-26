<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    use HasFactory;

    protected $casts = [
        'options' => 'array',
    ];

    protected $fillable = [
        'id', 'question', 'choice', 'answer', 'type', 'term', 'hint'
    ];
}