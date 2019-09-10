@extends('layouts.app')
@section('content')
<div class="container">
@foreach($cart_items as $items)
    <p>{{$items->title}}</p>
    <p>{{$items->desc}}</p>
    <p>{{$items->cost}}</p>
    <p><button> Buy Now </button></p>
@endforeach
</div>

@endsection