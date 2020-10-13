<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/fashion.css">
            <title> Egypt Hut </title>
            <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@400;500;600&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
        </head>
        <body>
            <!--navbar-->
            <div class="header">
            @extends('layouts.search')
            
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="<?php echo url('/'); ?>/images/logo.png" alt="logo" width="200px">
                    </a>
                    </div>
                    <nav>
                    <ul>
                            <li><a href="{{route('home')}}"> Home </a></li>
                             <li><a href="{{route('product.index')}}">Products</a></li>
                             <li><a href="{{route('aboutus')}}">About Us</a></li>
                             <li><a href="{{route('contact')}}">Contacts</a></li>
                             <li>@if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/user/profile') }}" class="text-sm text-gray-700 underline">profile</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
                
            @endif</li>
            </ul>
                    </nav>
                    <a href="{{ route('cart.index') }}">
                    <img src="images/cartlogo1.png" alt=""/ width="30px" height="30px">
                    </a>
                    <a href="{{ route('wishlist') }}">
                    <img src="images/wishlist.png" alt=""/ width="40px" height="40px">
                    </a>
                        </ul>
                    </nav>
                </div>
                @section('content')
                
            </div>
            
          
           </div>
           
        <!--end navbar-->
       
        
        <!--product-->
            <div class="small-container">
            <div class="row row-2">
                  <h2>All products</h2>
                 
                  <select>
                    <option>Default sorting </option>
                    <option>Price low to high</option>
                    <option>Price high to low</option>
                    <option>By popularity</option>
                    <option>By sales</option>
                    <option>By rating</option>
                 </select>
        
               
              <div class="row">
            
              @foreach ($products as $product)
                 <div class="col-4">
                 @foreach($images as $productimage)
                 @if ($product->id == $productimage->product_id)
                    <p > {{$productimage->image}} </p>
                    @endif
                     @endforeach
                    <div class="rating">
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star-o"></i>
                     </div>
                     <button type="button" class="btn btn-outline-danger">{{$product->price}}</button>
                     <button type="button" class="btn btn-outline-danger">{{$product->sale_price}}</button>
                     <a href="{{route('product.show',$product->id)}}"
                  <h2 id="h2"> Product Details</h2>
                </a>
                  </div>  
              @endforeach
                  

            </div>

  <div class="page-btn">
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>5</span>
                <span>&#8594;</span>
                   </div>  
    </div>
    
           
           
                 
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col-1">
                            <h3>Download Our App</h3>
                            <p>Download EgyptHut App for IOS and Android mobile phone</p>
                            <div class="app-logo">
                                <img src="images/applogo1.png" alt="">
                                 <img src="images/applogo2.png" alt="">
                            </div>
                        </div>
                        <div class="footer-col-2">
                            <img src="images/logo.png" alt="">
                            <p>our purpose is to provide the customer with authentic Designer products</p> 
                        </div>
                        <div class="footer-col-3">
                            <h3>Useful links</h3>
                            <ul>
                                <li>coupons</li>
                                <li>return policy</li>
                                <li>Blog Post</li>
                                
                            </ul>
                        </div>
                        <div class="footer-col-4">
                            <h3>Follow Us</h3>
                            <ul>
                                <li>Facebook</li>
                                <li>Twitter</li>
                                <li>Instagram</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <p class="copyright">copyright &copy; 2020 www.EgyptHut.com</p>
                </div>
            </div>

        <!--end footer-->
            </div>
            @endsection
        </body>
    </html>
</DOCTYPE>
        