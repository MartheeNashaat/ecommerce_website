<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\brand;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class SearchController extends Controller
{
    public function index()
    {
        $data = DB::table('products')->paginate(10); 
        return view('search', compact('data')); 
       
    }

    public function search(Request $request)
    {
                    
        $input= \Request::get('searchy');
        echo $input;
         
       $joined = DB::table('brands')
            ->join('products','brands.id','=','products.brand_id')
            ->join('categories','brands.id','=','categories.id')
            ->select('*')
            ->where('description', 'LIKE', '%'.$input.'%')
            ->orWhere('color', 'LIKE','%'.$input.'%')
            ->orWhere('type', 'LIKE',  '%'.$input.'%')
            ->orWhere('brands.name', 'LIKE', '%'.$input.'%')
            ->orWhere('products.name', 'LIKE', '%'.$input.'%')
            ->orWhere('price', 'LIKE', '%'.$input.'%')
           
            ->get();
           //dd($joined); 
           
          // return view('welcome')->with('search',$joined);
          }
}

?>
