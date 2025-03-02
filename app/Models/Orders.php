<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = ['title','notes','viewed'];
    /** @use HasFactory<\Database\Factories\OrdersFactory> */
    use HasFactory;
}
