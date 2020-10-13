
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
                </div>
                
                </div>
            </div>
            
            <div class="small-container">
            <div class="row row-2">
                  <h2>Your Wishlist</h2>
                 <div class="row">
                 @if(empty($wishlists))
                              <h2>your wishlist is empty go ahead and add to it</h2>

                 @endif
                  @foreach ($wishlists as $wishlist)
                  <div class="col-4">
                      
                  @foreach($wishlist->product->images as $productimage)
                                    <a href="{{route('product.show',$wishlist->product->id)}}">
                                    <img src={{asset("images/$productimage->image")}}/></a>
                                    @break
                                @endforeach  
                    <div class="rating">
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star-o"></i>
                     </div>
                     <button type="button" class="btn1 btn-outline-danger">{{$wishlist->product->price}}</button>
                       <button type="button" class="btn btn-outline-danger"><a href="{{route('wishlist.remove',$wishlist->product->id)}}">remove from wishlist</a></button>
                        <button type="button" class="btn btn-outline-danger"> <a href="{{route('product.show',$wishlist->product->id)}}">Product Details</a></button>
</div>
@endforeach
</div>
</div>


    
                

</body>
</DOCTYPE>

        
