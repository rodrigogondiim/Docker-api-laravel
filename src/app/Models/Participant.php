<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Participant extends Model
{
    use Uuid, HasFactory;

    protected $fillable = ['name', 'incoins'];
    protected $keyType = 'uuid';
    protected $primaryKey = 'id';

}
