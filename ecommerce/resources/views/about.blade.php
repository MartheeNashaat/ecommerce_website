
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
            <div class="header">
            
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <img src="images/logo.png" alt=""/ width="200px">
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
                    <img src="images/cartlogo1.png" alt=""/ width="30px" height="30px">
                    <img src="images/wishlist.png" alt=""/ width="30px" height="30px">
                </div>
                 
                </div>
            </div>

<div class="about">


<center>EgyptHut is Egypt based online platform displayig the old trends of women , menu
and kids from 3 brands which are tommy hilfiger , calvin klein and Armani exchange   
you can find the style you want on EgyptHut.com
We offer thousands of products with a wide range of prices along with 
cash on Delivery payment option.</center>
<center>EgyptHut is an online platform displayig products from the most famous brands in the 
USA,UK,Turkey and more. We help our customer to choose what they want .</center>
<center>All products are 100% genuine products shipped to you directly</center>
<center>-All prices are final prices.</center>

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
            </html>

</DOCTYPE>





</html>