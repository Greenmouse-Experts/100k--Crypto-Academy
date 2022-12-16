<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tp_Transactioon extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'plan',
        'amount',
        'type',
    ];
}
