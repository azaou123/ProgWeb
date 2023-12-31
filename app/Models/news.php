<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',	'description',	'created_at', 'image', 'updated_at'
    ];
    use HasFactory;
}
