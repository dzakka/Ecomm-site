@extends('layouts.bottom')
@section('footer')
@endsection


@extends('layouts.app')
@section('content')
<div class="container">
<div class="row" style="margin-top:20px;">
        @foreach($items as $item)
            <div class="col-lg-6">
                <img src="/images/{{$item->image}}" width="473" height="680">
            </div>    
           <div class="col-lg-6">
            <h4 class="text-center">${{$item->cost}}.00</h4>
               
           </div>
        @endforeach 
</div>
</div>
@endsection


