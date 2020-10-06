<!doctype html>
@extends('layouts.search')

@section('title', 'Page Title')

<body>
@section('content')

@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/user/profile') }}" class="text-sm text-gray-700 underline">profile</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif
            
    <div class="products text-center">
        @foreach ($products as $product)
            <div class="products">
            @foreach($product->images as $productimage)
            <a href="{{route('product.show',$product->id)}}">
            <img src={{asset("images/$productimage->image")}} width="200" height="200" alt="product"/></a>
            <!-- <a href="#"><img src="{{url('images/'.$productimage->image)}}" alt="product"></a> -->
             @endforeach  
             <a href="{{route('product.show',$product->id)}}"><div class="product-name">{{ $product->name}}</div></a>
            <div class="product-price">{{$product->price}}</div>
            <div class="product-saleprice">{{$product->sale_price}}</div>
            
     </div>
        @endforeach
        </div>
        @endsection 
       
   
    </body>
    </html>