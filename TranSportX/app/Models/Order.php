<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $fillable = [
        'code_orders',
        'user_id',
        'status',
        'sender_name',
        'sender_telephone',
        'sender_address',
        'full_name',
        'telephone',
        'address',
        'total_price',
    ];
    const  PENDING = 0;
    const CONFIRMED = 1;
    const SHIPPING = 2;
    const SHIPPED = 3;
    const COMPLETE = 4;
    const CANCEL = 5;
    public function getStatus(){
        switch ($this->status){
            case self::PENDING: return "<span class='text-secondary'>Đơn Hàng Đã Được Tạo</span>";
            case self::CONFIRMED: return "<span class='text-info'>Đã xác nhận</span> ";
            case self::SHIPPING: return "<span class='text-warning'>Đang giao hàng</span>";
            case self::SHIPPED: return "<span class='text-primary'>Đã giao hàng</span>";
            case self::COMPLETE: return "<span class='text-success'>Hoàn Thành</span>";
            case self::CANCEL: return "<span class='text-black'>Hủy</span>";
        }
    }
}
