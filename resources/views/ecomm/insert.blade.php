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
        <form class="form-horizontal" action="/store-info" method="post" enctype="multipart/form-data">
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
            <div class="form-group">
                    <label class="control-label col-sm-2" for="category">Category</label>
                    <div class="col-sm-10">
                    <select name="category" class="form-control">
                        <option value="auto-parts">Auto parts</option>
                        <option value="clothing">Clothing</option>
                        <option value="home">Home Decor</option>
                        <option value="jewelry">Jewelry</option>
                        <option value="toys">Toys</option>
                        <option value="computer-parts">Computer Accessories</option>
                        <option value="other">other</option>
                    </select>    
            </div>
            <div class="form-group">
                    <label class="control-label col-sm-4" for="color">Color(Enter all colours seperated by a comma)</label>
                    <div class="col-sm-10">
                     <input class="form-control" type="text" name="color">  
                    </div>
            </div>
            <div class="form-group">
                    <label class="control-label col-sm-4" for="size">Size of Item</label>
                    <div class="form-group form-row">
                        <label class="col-sm-1 form-label">small</label>   
                         <input class="form-control col-sm-5" type="text" name="small">  
                    </div>
                    <div class="form-group form-row">
                            <label class="col-sm-1 form-label">large</label>   
                             <input class="form-control col-sm-5" type="text" name="large">  
                    </div>
                    <div class="form-group form-row">
                            <label class="col-sm-1 form-label">extra large</label>   
                             <input class="form-control col-sm-5" type="text" name="extra-large">  
                    </div>
            </div> 
            <div class="form-group">
                    <label class="control-label col-sm-2" for="notes">Notes</label>
                    <div class="col-sm-10">
                     <textarea class="form-control" type="text" name="notes"></textarea>  
                    </div>
            </div>
            <div class="form-group">
                    <label class="control-label col-sm-2" for="stock">Upload the Image</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="photo"> 
                </div>   
            </div>       

            </div>
            <div class="form-group">
                    <input type="submit" class="btn btn-primary">
                </div>
        </form>    

<a href="/show-info"><button class="btn btn-info">View already existing Items</button></a>
</div>
@endsection