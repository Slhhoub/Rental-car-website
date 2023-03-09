<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contra extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer', 'car','star_date','end_date','duration',  'prix',
    ];
}
