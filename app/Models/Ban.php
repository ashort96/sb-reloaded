<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ban extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip',
        'name',
        'steam_id',
        'created',
        'ends',
        'length',
        'reason',
        'admin_id'
    ];
}
