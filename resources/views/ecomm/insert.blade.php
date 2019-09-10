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
        <form class="form-horizontal" action="/store-info" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label class="control-label col-sm-2" for="title">Title</label>
                <div class="col-sm-10">
                   <input type="text" class="form-control" name="title"> 
                </div>
            </div>
            <div class="form-group">
                    <label class="control-label col-sm-2" for="desc">Description</label>
                    <div class="col-sm-10">
                       <input type="text" class="form-control" name="desc"> 
                    </div>
            </div>
            <div class="form-group">
                    <label class="control-label col-sm-2" for="cost">Cost</label>
                    <div class="col-sm-10">
                       <input type="text" class="form-control" name="cost"> 
                    </div>
            </div>
            <div class="form-group">
                    <label class="control-label col-sm-2" for="stock">stock</label>
                    <div class="col-sm-10">
                       <input type="text" class="form-control" name="stock"> 
                    </div>
            </div>
            <div class="form-group">
                    <input type="submit" class="btn btn-primary">
                </div>
        </form>    

<a href="/show-info"><button class="btn btn-info">View already existing Items</button></a>
</div>
@endsection