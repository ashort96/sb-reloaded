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
        'enabled'
    ];

    protected $hidden = [
        'rcon_pw'
    ];

    public function admins() {
        return $this->hasMany(Admin::class);
    }
}
