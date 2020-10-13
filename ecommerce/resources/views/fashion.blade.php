<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="<?php echo url('/'); ?>/css/
fashion.css">
            <title> Egypt Hut </title>
            <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@400;500;600&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/<?php echo url('/'); ?>/css/
font-awesome.min.css" >
        </head>
        
        <body>
            <div class="header">
            
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="images/logo.png" alt=""/ width="200px">
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
                </div>
                 <div class="cover">
        <img src="images/cover1.png">
                
                </div>
                </div>
            </div>
            <div class="small-container">
                <br><br><br><br><br><br>
            <h2 class="title">Available Brands</h2>

                <div class="categories">
                    <div class="small container">
                    <div class="row">
                        <div class="col-3">
                        <a href="{{route('product.brand','Armani Exchange')}}">
                            <img src="images/armaniilogo.png" alt="">
                            </a>
                        </div>
                        <div class="col-3">
                        <a href="{{route('product.brand','Tommy Hilfiger')}}">
                            <img src="images/tommyylogo.png" alt="">
                            </a>
                        </div>
                        <div class="col-3">
                        <a href="{{route('product.brand','Calvin Klein')}}">   
                            <img src="images/ckklogo.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                </div>

        
                    </div>
            <div class="small-container">
                <h2 class="title">Featured Products</h2>
                <div class="row">
                    <div class="col-4">
                        <img src="images/fpckwatch.jpg" alt="">
                        <h4>CK Watch for men</h4>
                        <p>5000 EGP</p>
                    </div>
                    <div class="col-4">
                        <img src="images/fpbag.png" alt="">
                        <h4>Armani Exchange Blue Bag</h4>
                        <p>3500 EGP</p>
                    </div>
                    <div class="col-4">
                        <img src="images/fpsneakers.png" alt="">
                        <h4>Tommy Hilfiger High neck sneakers </h4>
                        <p>3000 EGP</p>
                    </div>
                    <div class="col-4">
                        <img src="images/fpwatch.png" alt="">
                        <h4>tommy Hilfiger Watch for women</h4>
                        <p>4500 EGP</p>
                    </div>
                </div>
                <h2 class="title">Latest Products</h2>
                <div class="row">
                    <div class="col-4">
                        <img src="images/lphoodie.png" alt="">
                        <h4>tommy hilfiger white hoodie</h4>
                        <p>800 EGP</p>
                    </div>
                    <div class="col-4">
                        <img src="images/lpjacket.png" alt="">
                        <h4>Armani Exchange black jacket</h4>
                        <p>1200 EGP</p>
                    </div>
                    <div class="col-4">
                        <img src="images/lpjeans.png" alt="">
                        <h4>CK Blue Jeans </h4>
                        <p>1200 EGP</p>
                    </div>
                    <div class="col-4">
                        <img src="images/lptshirt.png" alt="">
                        <h4>Ck T-shirt</h4>
                        <p>600 EGP</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <img src="images/lpsweatshirt.png" alt="">
                        <h4>CK pink Swearshirt</h4>
                        <p>750 EGP</p>
                    </div>
                    <div class="col-4">
                        <img src="images/lptommy.png" alt="">
                        <h4>Tommy Hilfiger white Jacket</h4>
                        <p>1200 EGP</p>
                    </div>
                    <div class="col-4">
                        <img src="images/jj.png" alt="">
                        <h4>CK Blue jacket </h4>
                        <p>1200 EGP</p>
                    </div>
                    <div class="col-4">
                        <img src="images/armanijacket.png" alt="">
                        <h4>Armani Exchange Black Jacket</h4>
                        <p>3500 EGP</p>
                    </div>
                </div>
                
            
                    
            <div class="offer">
                <div class="row">
                    <div class="col-2">
                        <img src="images/offerpic.png" alt="" class="offer-img">
                    </div>
                    
                    <h1>Exclusively Available <br>Raymond Weil Watch</h1>
                    <a href="#" class="btn">Buy Now &#8594;</a>
                </div>
                </div>
                <div class="brands">
                    <div class="small-container">
                <h2 class="title">UP Coming Brands</h2>
                <div class="row">
                    <div class="col-5">
                        <img src="images/guccilogo.png" alt="">
                        
                    </div>
                     <div class="col-5">
                        <img src="images/nike.png" alt="">
                        
                    </div>
                    <div class="col-5">
                        <img src="images/Guess-Emblem.png" alt="">
                        
                    </div>
                    <div class="col-5">
                        <img src="images/Planet-Express-Michael-Kors-logo.png" alt="">
                        
                    </div>
                </div>
            </div>
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
    
                
        </body>
    
    
    
    
    
    
    
    
    
    
    
    
    
    </html>


















</DOCTYPE>