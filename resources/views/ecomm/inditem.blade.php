@extends('layouts.bottom')
@section('footer')
@endsection


@extends('layouts.app')
@section('content')
<div class="container">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{session()->get('message')}}
        </div>
    @elseif(session()->has('error'))
    <div class="alert alert-danger">
            {{session()->get('error')}}
        </div>       
    @endif
<form  action="/add-to-cart" method ="POST" enctype="multipart/form-data"> 
    {{csrf_field()}}
<div class="row text-center" style="margin-top:20px;">
        @foreach($items as $item)
            <div class="col-lg-7">
                <img src="/images/{{$item->image}}" width="400" height="630" style="margin-left:30px;">
            </div>    
           <div class="col-lg-4">
            <h4>${{$item->cost}}.00</h4>
           <input type="hidden" name="item_id" value="{{$item->id}}">
               <p>Or 6 weekly interest-free payments of $33.16 with Laybuy Laybuy What's this?</p>
               <p>Or 6 weekly interest-free payments of $33.16 with Laybuy Laybuy What's this?</p>
                    <div>
                        <p>Size</p>
                            <select name="size" class="form-group custom-select custom-select-xs">
                                <option value="small">Small</option>
                                <option value="large">Large</option>
                                <option value="extra-large">Extra Large</option>
                            </select>    
                    </div>
                    <div>
                        <p>Color</p>
                        <select name="color" class="custom-select custom-select-xs">
                            @for($x=0;$x< count($colors);$x++)
                            <option value="{{$colors[$x]}}">{{$colors[$x]}}</option>
                            @endfor
                        </select>    
                    </div>
                    <p>Quantity</p>
                    <div style="margin-left:0px;margin-top:0px;">
                        <!--<button onclick="plus()" class="button-plus">+</button> -->
                        <input type="number" id="final" name="quantity" class="form-control">
                        <!--<button onclick="minus()" class="button-plus">-</button> -->
                    </div>


              <button type="submit" class="button-cart" style="margin-top:20px;">Add to Cart</button>
            </div>
        @endforeach 


</div>
</div>
</form>
@endsection




