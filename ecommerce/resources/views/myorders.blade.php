<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
    </head>

    <body class="font-sans antialiased">
    
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-dropdown')
             <!-- Page Heading -->
             <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">  </div>
            </header>


        @livewireScripts

      
            <br>
        <div style="margin-left:10%;">
                 <label style=" font-size: 115%;">My Orders </label> <br>
                 <label style="color:#4b5563; font-size: 90%;">Display my previous orders here </label>

                 
                <div class="mt-5 md:mt-0 md:col-span-2" >
                     <div class="px-3 py-5 sm:p-6 bg-white shadow sm:rounded-lg" style ="margin-left:25%; width:55%; padding:3.5% ">
         
                           <div> 
                               <?php
                                    $id= auth()->user()->id;
                                    $details=DB::table('orders')->where('user_id', $id)->get();
                               ?>
                                <div style="position:absolute;">
                              <table width="100%"  border="0" cellspacing="0" cellpadding="0" >
                                  <tr >
                                      <td id="ordersLabel"onclick="document.getElementById('orders-details').innerHTML=document.getElementById('orders').innerHTML.onclick='';"><pre>Orders</td>
                                      <td id="detailsLabel" onclick="document.getElementById('orders-details').innerHTML=document.getElementById('details').innerHTML;"><pre>             Details</td>
                                  </tr>
                              </table>
                                     __________________________________________<br><br>
                                    </div>
                                    
                                    <div id="orders" style="display:block;" >
                                    <br> <br>
                                    
                                     @foreach($details as $d )
                                     {{$d->order_number }} <br>
                                      @endforeach
                                 </div>
                                 <div id="details"  style="display:none;" >
                                 <br> <br>
                                     @foreach ($details as $d)
                                        OrderNumber: {{$d->order_number}}<br>
                                        Status: {{$d->status}} <br>
                                        Total:{{$d->grand_total}} <br>
                                        Payment Method: {{$d->payment_method}} <br> 
                                        Item Count: {{$d->item_count}} <br>
                                        Fullname: {{$d->shipping_fullname}} <br>
                                        Shipping address: {{$d->shipping_address}}, {{$d->shipping_city}} <br>
                                        Phone number: {{$d->shipping_phone}} <br>
                                        @if ($d->notes !=NULL)
                                           Notes:{{$d->notes}} <br>
                                        @endif
                                         Ordered at: {{$d->created_at}} <br>
                                     __________________________________________<br>
                                    @endforeach
                                    
                                  </div>
                                  
                                 
                                  <div id="orders-details"></div>
                                 
                            
                            </div> 
                      </div>
                 </div>
           </div>

    </body>
</html>



