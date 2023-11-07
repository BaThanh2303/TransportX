<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Home(){
        return view("pages.home");
    }
    public function contact(){
        return view("pages.contact");
    }
    public function about(){
        return view("pages.about");
    }
    public function services(){
        return view("pages.services");
    }
    public function search(Request $request) {
        // Lấy thông tin đơn hàng của người dùng
        $code = $request->get("code");
        $order = Order::where('code_orders', $code)->first();
        // Nếu đơn hàng không tồn tại
        if (!$order) {
            // Trả về lỗi
            return redirect()->back()->withErrors([
                'error' => 'Không tìm thấy đơn hàng',
            ]);
        }
        return view("pages.tracking", compact("order","code"));
    }

}
