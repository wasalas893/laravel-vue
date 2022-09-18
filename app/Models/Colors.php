<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colors extends Model
{
    use HasFactory;
    protected $table = 'colors';
    protected $fillable = [
        'color_name',
        'color_code',
        'color_description',
        
    ];

    protected $primaryKey = 'id';
}