<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\brand;

class productcontroller extends Controller
{
    public function index(){
        $products = product::all();
        return view('gucci')->with('products',$products);
    }

    public function show($id){
        $product= product::where('id',$id)->firstOrFail();
        return view('product')->with('product',$product);
    }
    public function showbrand($brand){
        $brand=brand::where('name',$brand)->firstOrFail();
         $products= product::where('brand_id',$brand->id)->get();
        return view('gucci')->with('products',$products); 
    }
    function getfilter($id)
    {  
        $products = product::where('category_id', $id)->get();
        return view('gucci')->with('products',$products);
    }
}
