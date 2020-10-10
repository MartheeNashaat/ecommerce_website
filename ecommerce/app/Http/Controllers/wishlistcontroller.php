<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wishlist;
use App\Models\product;
use Illuminate\Support\Facades\Auth;

class wishlistcontroller extends Controller
{
    function index()
    {  
        $wishlists = wishlist::where('User_id',Auth::id())->get();
        return view('wishlist')->with('wishlists',$wishlists);
    }
    function addwishlist($id)
    {  
        if(!Auth::check())
        {
            return redirect()->back()->with('flash_message_error','please log to add product in your wishlist.');
        }
        else
        {
            $check=wishlist::where('User_id',Auth::id())->where('product_id',$id)->get()->first();
            if(isset($check)){
                return redirect()->back()->with('flash_messaged', 'This item is already in your
                wishlist!');
            }
            else{
            $wishlist = new Wishlist;
            $wishlist->User_id = Auth::id();
            $wishlist->product_id =$id; 
            $wishlist->save();

            return redirect()->back()->with('flash_message',
            'Item Added to your wishlist');
        }}
    }
    function removeproduct($id){
        $wishlist = wishlist::where('product_id',$id)->firstorfail();
        $wishlist->delete();
        return redirect()->back()->with('flash_message',
         'Item successfully deleted');
    }
}
