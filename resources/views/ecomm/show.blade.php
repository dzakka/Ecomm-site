@extends('layouts.app')

@section('content')
<div class="contanier">
      @if(session()->has('message'))
      <div class="alert alert-success">
          {{session()->get('message')}}
      </div>
  @elseif(session()->has('error'))
  <div class="alert alert-danger">
          {{session()->get('error')}}
      </div>       
  @endif
        @foreach ($values as $row)
         <div>
            <p>{{$row->id}}</p> 
            <p>{{$row->title}}</p>
            <p>{{$row->desc}}</p>
            <p>{{$row->cost}}</p>
            <p>{{$row->stock}}</p>
         <a><p><button> Buy Now </button></a><span style="margin-left:20px;"><button><a href="add-to-cart/{{$row->id}}">Add to cart</a></button></span></p>
         </div>    
        @endforeach
       {{$values->links()}} 
    </div>
    


@endsection