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
@foreach($cart_items as $items)
    <p>{{$items->title}}</p>
    <p>{{$items->desc}}</p>
    <p>{{$items->cost}}</p>
<p><a href="/buy/{{$items->item_id}}"><button> Buy Now </button></a></p>
@endforeach
</div>

@endsection