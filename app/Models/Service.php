<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function orders() {
        return $this->hasMany(Orders::class);
    }   
}
