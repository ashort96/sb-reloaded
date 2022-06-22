<?php

namespace App\Models;

use App\Models\Server;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServerGroup extends Model
{
    use HasFactory;

    public function servers() {
        return $this->hasMany('App\Models\Server');
    }
}
