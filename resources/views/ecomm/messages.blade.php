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
  


@endsection