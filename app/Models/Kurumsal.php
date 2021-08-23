<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurumsal extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'kurumsalBaslik',
        'kurumsalGorsel',
        'kurumsalIcerik'   
    ];
}
