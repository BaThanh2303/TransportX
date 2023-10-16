<?php

namespace App\Http\Controllers;

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
    public function Search(Request $request) {
        $product = Product::where("code", $request)->get();
        return view("",compact("$product"));
    }
}
