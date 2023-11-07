<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function create(){
        $product = session()->has("product")?session("product"):[];
        return view("admin.pages.createOrder",compact("product"));
    }
    public function store(Request $request){
        $order = Order::create([
            "code_orders"=>random_int(1000000,9999999),
            "user_id"=>Auth::user()->id,
            "sender_name"=>$request->get("sender_name"),
            "sender_telephone"=>$request->get("sender_telephone"),
            "sender_address"=>$request->get("sender_address"),
            "full_name"=>$request->get("full_name"),
            "telephone"=>$request->get("telephone"),
            "address"=>$request->get("address"),
        ]);
        $product = Product::create([
            "product_name"=>$request->get("name_product"),
            "qty"=>$request->get("qty"),
            "weight"=>$request->get("weight"),
            "price"=>$request->get("price"),
            "length"=>$request->get("length"),
            "width"=>$request->get("width"),
            "height"=>$request->get("height"),
        ]);
        DB::table("order_products")->insert([
            "order_id"=>$order->id,
            "product_id"=>$product->id,
        ]);
        return redirect()->back()->with("success","Successfully");
    }
}
