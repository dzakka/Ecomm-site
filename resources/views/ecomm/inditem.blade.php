@extends('layouts.bottom')
@section('footer')
@endsection


@extends('layouts.app')
@section('content')
<div class="container">
<div class="row text-center" style="margin-top:20px;">
        @foreach($items as $item)
            <div class="col-lg-7">
                <img src="/images/{{$item->image}}" width="400" height="630" style="margin-left:30px;">
            </div>    
           <div class="col-lg-4">
            <h4>${{$item->cost}}.00</h4>
               <p>Or 6 weekly interest-free payments of $33.16 with Laybuy Laybuy What's this?</p>
               <p>Or 6 weekly interest-free payments of $33.16 with Laybuy Laybuy What's this?</p>
                    <div>
                        <p>Size</p>
                            <select name="size" class="form-group custom-select custom-select-xs">
                                <option>Small</option>
                                <option>Large</option>
                                <option>Extra Large</option>
                            </select>    
                    </div>
                    <div>
                        <p>Color</p>
                        <select name="size" class="custom-select custom-select-xs">
                            @foreach($colors as $color)
                        <option>{{$color}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <p>Quantity</p>
                    <div class="form-inline" style="margin-left:50px;margin-top:0px;">
                        <button onclick="plus()" class="button-plus">+</button>
                        <input type="number" id="final" value=0 class="form-control">
                        <button onclick="minus()" class="button-plus">-</button>    
                    </div>


                <button class="button-cart" style="margin-top:20px;">Add to Cart<i class='fas fa-cart-plus'></i></button>
            </div>
        @endforeach 
</div>
</div>
@endsection




