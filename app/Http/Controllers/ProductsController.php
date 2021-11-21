<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    public function index(){
        $products = Products::orderByRaw('Product_type, Product_name, Product_stock, Product_description, Price')->limit(50)->get();
        return view('products.index',['product'=>$products]);
    }
}
