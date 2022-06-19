<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ip',
        'port',
    ];

    protected $hidden = [
        'rcon_pw'
    ];

    protected $connection = 'mysql';
}
