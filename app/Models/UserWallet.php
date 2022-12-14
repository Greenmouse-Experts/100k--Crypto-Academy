<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'bal',
        'ref_bonus',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'foreign_key');
    }
}
