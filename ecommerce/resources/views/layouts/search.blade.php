<!DOCTYPE html>
    <head>
        <title>HomePage - @yield('title')</title>
    </head>

<body>
@section('sidebar')
       
        <div class="container">
 
             <form action="{{ route('searchy') }}" method="GET" role="searchy">
         @csrf
                 <div class ="search-box" style="position:absolute; right:9%; top:8%;" > 
    
                     <input type = "text" name="searchy" id="type" placeholder="Type to search" style=" width:130%; background-color:transparent;">
                     <button type="submit" id="btn" value="h" style=" position:absolute; width:15%; height: 100%; right:-55%; top: 3%; "> 
                     <img src="images/icons/search.png" width =60px; alt= "Search" style="position:absolute; right:6%; left :-45%; bottom:5%; top :-110%; border:none; "> 
                     </button>
                     
                   
                 </div>
             </form>
        </div>
@show
        @yield('content')
    </body>
</html>
