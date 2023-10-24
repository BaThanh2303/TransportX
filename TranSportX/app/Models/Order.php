<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $fillable = [
        'code',
        'users_id',
        'product_id',
        'customer_id',
        'status_id',
        'price'
    ];
}
