<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sales;

class SalesController extends Controller
{
    
    public function index(){
        $sales = Sales::orderByRaw('ProductId,Total_sales')->limit(50)->get();
        return view('sales.index',['sales'=>$sales]);
    }
}
