<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sellers;

class SellersController extends Controller
{
    public function index(){
        $sellers = Sellers::orderByRaw('Name,Email,Product_Type,Total_sales')->limit(50)->get();
        return view('sellers.index',['seller'=>$sellers]);
    }
    public function create(){
        return view('sellers.create');
    }
    public function store(Request $request){
        $this->validate($request, [
            'Name'=>'required',
            'Email'=>'required|Email',
            'Product_Type'=>'required',
            'Total_sales'=>'required',
        ]);
        Sellers::create([
            'Name'=>$request['Name'],
            'Email'=>$request['Email'],
            'Product_Type'=>$request['Product_type'],
            'Total_sales'=>$request['Total_sales'],
        ]);
        return redirect('/sellers');
    }
}
