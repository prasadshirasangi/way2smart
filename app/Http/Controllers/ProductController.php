<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addMachine()
    {
        $productdetails=  Product::where('type','=',1)->get();
        
        return view('admin/addmachine',compact('productdetails'));
        
    }

    public function addImpelement()
    {
        $productdetails=  Product::where('type','=',0)->get();
        
        return view('admin/addimpelement',compact('productdetails'));

    }
}
