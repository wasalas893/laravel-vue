<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availabilitys extends Model
{
    use HasFactory;

    protected $table = 'availibilitys';
    protected $fillable = [
        'av_name',
        'av_description',
        
    ];

    protected $primaryKey = 'id';
}
