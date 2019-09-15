@extends('layouts.app')

@section('content')
<div class="container-fluid">
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
            
            <div class="row shadow p-4 mb-4 bg-white" id="main-card">
                <div class="col-sm-4">
                    <img class="img-thumbnail" src="/images/{{$row->image}}" width="400" height="600">
                </div>    
                <div class="col-sm-8">
                    <h4>{{$row->title}}</h4>
                    <p><b>Desrciption:</b> {{$row->desc}}</p>
                    <p><b>Price of product:</b> ${{$row->cost}}</p>            
                    <a><p><button class="btn btn-primary" type="button"> <i class='fas fa-credit-card'></i> Buy Now </button></a><span style="margin-left:20px;"><button class=" btn btn-success" type="button" onclick='location.href="add-to-cart/{{$row->id}}"'><span class="fas fa-cart-plus"> Add to cart</span></button></span></p>
                </div>
            </div>
        @endforeach

<ul class="pagination justify-content-end" style="margin:20px 0;">        
    <li class="page-item">{{$values->links()}} </li>
</ul>

</div>
@endsection