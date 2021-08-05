<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //

    function index(){
        $data=Product::all();
        return view('product')->with('products',$data);
    }
    function detail($id)
    {
        $data =Product::find($id);
        return view('detail')->with('product',$data);
    }
}
