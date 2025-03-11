<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = ['title','notes','viewed','status_id','service_id'];
    /** @use HasFactory<\Database\Factories\OrdersFactory> */
    use HasFactory;

    public function status() {
        return $this->belongsTo(Status::class);
    }
    
    public function service() {
        return $this->belongsTo(Service::class);
    }
}
