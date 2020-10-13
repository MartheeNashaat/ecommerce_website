<!DOCTYPE html>
    <head>
        <title>HomePage - @yield('title')</title>
      
        <style> 
#type[type=text] {
 
  width:90%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('images/icons/search11.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;

}


#type[type=text]:focus {
  width: 190%;
  border-color:#ffaf81;
    box-shadow:0 0 10px #ffaf81;
}
</style>
    </head>

<body>
      
        <div class="container">
 
             <form action="{{ route('searchy') }}" method="GET" role="searchy">
         @csrf
                 <div class ="search-box" style="position:absolute; right:26%; top:20%;" > 
    
                     <input type = "text" name="searchy" id="type" placeholder="Type to search.."  >
                  <!--   <button type="submit" id="btn" value="h" style=" position:absolute; width:15%; height: 100%; right:-55%; top: 3%; "> 
                     <img src="images/icons/search.png" width =60px; alt= "Search" style="position:absolute; right:6%; left :-45%; bottom:5%; top :-110%; border:none; "> 
                     </button>  -->
                     
                   
                 </div>
             </form>
        </div>

        @yield('content')
    </body>
</html>
