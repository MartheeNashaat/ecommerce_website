<DOCTYPE html>
    <html lang="en">
   <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="<?php echo url('/'); ?>/css/fashion.css">
            <title> Egypt Hut </title>
            <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@400;500;600&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/<?php echo url('/'); ?>/css/font-awesome.min.css" >
        </head>
        <body>
            <!--navbar-->
            <div class="header">
            
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
                    <img src="<?php echo url('/'); ?>/images/cartlogo1.png" alt=""/ width="30px" height="30px">
                    </a>
                    <a href="{{ route('wishlist') }}">
                    <img src="<?php echo url('/'); ?>/images/wishlist.png" alt=""/ width="40px" height="40px">
                    </a>
                        </ul>
                    </nav>
                </div>
                
            </div>
           </div>
        <!--end navbar-->
        <!--product-->
            <div class="small-container single-product">
            <div class="row">
             <div class="col-2">
             @foreach($product->images as $productimage)
            <img src={{asset("images/$productimage->image")}} width="400" height="400" alt="product"/>
            @endforeach
             </div>    
                <div class="col-2">
                  <p class="jacket">{{$product->brand->name}} </p>
                  <h1>{{$product->name}}</h1>
                  <button type="button" class="btn btn-outline-danger">{{$product->price}}</button>
                  <button type="button" class="btn btn-outline-danger">{{$product->sale_price}}</button>
                  <p class="jacket">color:{{$product->color}} </p> 

                  <select>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>L</option>
                    <option>M</option>
                    <option>S</option>
                  </select>
                  <input type="number" value="1">
                  <a href="" class="btn cart">Add To Cart</a>
                  <br>
                  <h3>Product Details</h3>
                  <br>
                  <p>{{$product->description}}</p>
                </div>
            </div>
                <div class="small-continer">
                <div class="row row-2">
                      
                  <h2>Related Product</h2>  
                    
                </div>
                </div>
              <div class="row">
                 <div class="col-4">
                  <img src="<?php echo url('/'); ?>/images/
jacket.png" alt="t-shirt">
                    <div class="rating">
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star-o"></i>
                     </div>
                     <button type="button" class="btn btn-outline-danger">700</button>
                  </div>  
                  <div class="col-4">
                  <img src="<?php echo url('/'); ?>/images/
pantalon.jpg" alt="t-shirt">
                    <div class="rating">
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star-o"></i>
                     </div>
                     <button type="button" class="btn btn-outline-danger">400</button>
                  </div>  
                  <div class="col-4">
                  <img src="<?php echo url('/'); ?>/images/
sweatshirt.jpg" alt="t-shirt">
                    <div class="rating">
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star-o"></i>
                     </div>
                     <button type="button" class="btn btn-outline-danger">450</button>
                  </div>  
                  
                    <div class="col-4">
                  <img src="<?php echo url('/'); ?>/images/
t-shirt1.png" alt="t-shirt">
                    <div class="rating">
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star-o"></i>
                     </div>
                     <button type="button" class="btn btn-outline-danger">500</button>
                  </div>
                  
          <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col-1">
                            <h3>Download Our App</h3>
                            <p>Download EgyptHut App for IOS and Android mobile phone</p>
                            <div class="app-logo">
                                <img src="<?php echo url('/'); ?>/images/
applogo1.png" alt="">
                                 <img src="<?php echo url('/'); ?>/images/
applogo2.png" alt="">
                            </div>
                        </div>
                        <div class="footer-col-2">
                            <img src="<?php echo url('/'); ?>/images/
logo.png" alt="">
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
            </div>
            </div>
            
        </body>

    </html>
</DOCTYPE>