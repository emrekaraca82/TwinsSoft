<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable=[        
        'icerikBaslik',   
        'icerikLink',    
        'icerikDetay',   
        'icerikKeyword',
        'icerikGorsel',
        'icerikSira' ,
        'icerikDurum' 
    ];
}
