

<h2>Checkout</h2>


<h3>Shipping Information</h3>

<form action="{{route('orders.store')}}" method="post">
    @csrf





    <div class="form-group">
        <label for="">Full Name</label>
        <input type="text" name="shipping_fullname" id="" class="form-control">
    </div>

    <br/>

    <div class="form-group">
        <label for="">City</label>
        <input type="text" name="shipping_city" id="" class="form-control">
    </div>
    <br/>



    <div class="form-group">
        <label for="">Full Address</label>
        <input type="text" name="shipping_address" id="" class="form-control">
    </div>
    <br/>

    <div class="form-group">
        <label for="">Mobile</label>
        <input type="text" name="shipping_phone" id="" class="form-control">
    </div>
    
<br/>

    <h3>Payment option</h3>

    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="payment_method" id="" value="cash_on_delivery">
            Cash on delivery

        </label>

    </div>

    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal">
            Paypal

        </label>

    </div>

<div>
   
    <br/>
    <button type="submit" class="btn btn-primary">Place Order</button>



</div>

</form>


