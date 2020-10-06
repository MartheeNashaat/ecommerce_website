<!DOCTYPE html>
@extends('layouts.search')
<html>  
<head>
    <title>Egypt Hut</title>
     <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/fashion.css">
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/<?php echo url('/'); ?>/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Mountains+of+Christmas|Shadows+Into+Light&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Hanalei|Indie+Flower|Orbitron|Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed|PT+Serif&display=swap" rel="stylesheet">
    
</head>
<body>     
@section('content')
        <div class="box1">
        <ul>
            <li><a href="">EGP</a>  <i class="fa fa-angle-down" aria-hidden="true"></i></li>
            <li><a href="">English</a>  <i class="fa fa-angle-down" aria-hidden="true"></i></li>
            <li><a href="{{ url('/user/profile') }}">My Account</a>  <i class="fa fa-angle-down" aria-hidden="true"></i></li>
            </ul>
        
            <h5> Free shipping on all Egy orders over 1000EGP</h5>
        </div>
        <!-- start novbar-->
        <div class="subbox">
            
            <ol>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('product.index')}}">Shop</a></li>
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
            
            </ol>
        <!--end novbar-->

        <!--
           <nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
            -->
            
          
        </div>
        
        
        
        
        <div class="image22">
        <a href="{{route('product.brand','Tommy Hilfiger')}}">
        <img src="<?php echo url('/'); ?>/images/tommy.jpg" height="300" width="300" >
        </a>
        
        </div>
        <div class="image23">
        <a href="{{route('product.brand','Armani Exchange')}}">
        <img src="<?php echo url('/'); ?>/images/armanilogo.jpg" height="300" width="300">
        </a>
        </div>
        
        <div class="image24">
        <a href="{{route('product.brand','Calvin Klein')}}">   
        <img src="<?php echo url('/'); ?>/images/Calvin-Klein-01.jpg" height="300" width="300">
        </a>
        </div>
                
                
    <!--start footer-->
     <footer class="footer">
             copyRights &copy; EgyptHut
    </footer>
  <!--end footer-->
  @endsection          
</body>
</html>