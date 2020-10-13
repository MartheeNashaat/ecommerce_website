<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\brand;

class productcontroller extends Controller
{
    public function index(){
        $products = product::all();
        return view('products')->with('products',$products);
    }

    public function show($id){
        $product= product::where('id',$id)->firstOrFail();
        return view('product-details')->with('product',$product);
    }
    public function showbrand($brand){
        $brand=brand::where('name',$brand)->firstOrFail();
         $products= product::where('brand_id',$brand->id)->get();
        return view('products')->with('products',$products); 
    }
    function getfilter($id)
    {  
        $products = product::where('category_id', $id)->get();
        return view('products')->with('products',$products);
    }
    
    // returns data of products added upto 7 days earlier.
    function getNewArrivals()
    {
        $currentDate = date("Y-m-d H:i:s");
        $date = strtotime("-7 day");
        $sevenDaysEarlier = date('Y-m-d H:i:s', $date);
        $products = product::whereBetween('created_at', [$sevenDaysEarlier, $currentDate])->get();
        return view('products')->with('products',$products);
    }

    // A generic function that returns products with prices <= $price passed in the route.
    // Filters products according to the sale price not the original price.
    function getPriceFilter($price)
    {
        $products = product::whereBetween('sale_price', [0, $price])->get();
        return $products;
    }
}
