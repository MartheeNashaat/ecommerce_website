<<<<<<< Updated upstream
<!-- 
=======

<h2>Your Cart</h2>
<table class="table">
    
    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Sale Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
  
       
        @foreach ($cartItems as $item)
        
        <tr>
            <td scope="row">{{$item->Image}}</td>
            <td scope="row">{{$item->name}}</td>
            <td>
                {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}
            
            </td>
            <td>
                <form action="{{route('cart.update',$item->id)}}">
                    <input name="quantity" type="number" value ="{{$item->quantity}}">
                    <input type="submit" value ="save">
                </form>
            </td>
            <td>

                <a href="{{ route('cart.destroy', $item->id) }}">Remove </a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<h3>
Total Price:LE {{\Cart::session(auth()->id())->getTotal()}}
>>>>>>> Stashed changes

</h3>
<a  class="btn btn-primary" href="{{route ('cart.checkout')}}" role="button">Proceed to Checkout</a>
<div>
        <br />
<a  class="btn btn-primary" href="{{route ('product.index')}}" role="button">Back to Shop</a>
</div>

  -->





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
            </div>
            </div>
            
            <div class="small-container cart-page">
                <table >
                    <tr>
                        <th>Product</th>
                        
                        <th>Quantity</th>
                        
                       <th>Subtotal</th>
                       
                         <th>Action</th>
                        
                    </tr>
                    @foreach ($cartItems as $item)
                    <tr>
                        <td>
                            <div class="cart-info">
                                <div class="small container pic">
                                    <a href="{{route('product.show',$item->id)}}">
                                    @foreach($item->associatedModel->images as $productimage)
                                    <a href="{{route('product.show',$item->id)}}">
                                    <img src="{{ URL::to('/images/' . $productimage->image) }}" width=10px height=auto /></a>
                                    @break
                                @endforeach 
                                  <p> {{$item->name}}</p>
                                </div>
                                
                            </div>
                        </td>
                        <td>
                            <form action="{{route('cart.update',$item->id)}}">
                    <input action="onchange" name="quantity" type="number" value ="{{$item->quantity}}">
                </form>
                        </td>
                         <td> {{$item->price}} EGP </td>
                       <td> <a href="{{ route('cart.destroy', $item->id) }}">Remove</a></td>
                    </tr> 
                    @endforeach
                </table>
               
               <div class="total-price ">
                   <table>
                   <tr>
                       <td>Total Price:</td>
                       <td>{{\Cart::session(auth()->id())->getTotal()}} EGP</td>
                       
                   </tr>
                   

                       </table>
                </div>
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
                   </body>
    </html>

</DOCTYPE>