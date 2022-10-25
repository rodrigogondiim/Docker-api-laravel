<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Product extends Model
{
    use Uuid, HasFactory;

    protected $fillable = [
        'name',
        'incoins', 
        'real', 
        'cover', 
        'stock_current', 
        'stock_total',
        'suggested'
    ];
    protected $keyType = 'uuid';

}
