<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Home(Request $request){
        $product = Order::where("code", $request)
            ->join("status","orders.status_id","=","status.id")
            ->select("status.condition")
            ->get();
        return view("pages.home",compact("product"));
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
        $product = Order::where("code", $request)
            ->join("status","orders.status_id","=","status.id")
            ->select("status.condition")
            ->get();
    }
    public function create(){
        return view("admin.pages.createOrder");
    }
    public function createOrder(Request $request){
        $request->validate([
            "full_name"=>"required|min:6",
            "account"=>"required",
            "tel"=> "required|min:9|max:11",
            ""

        ],[
            "required"=>"Vui lòng nhập thông tin."
        ]);
    }
}
