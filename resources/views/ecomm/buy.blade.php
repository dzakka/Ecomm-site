@extends('layouts.app')
@section('content')
<div class="container">
<form action="/buy-now/{{$id}}" method="POST">
            
        {{csrf_field()}}
            <div class="form-group">
                <label class="control-label col-sm-2" for="card">Card Number</label>
                <div class="col-sm-10">
                   <input type="number" class="form-control" name="card"> 
                </div>
            </div>
            <div class="form-group">
                    <label class="control-label col-sm-2" for="cvc">CVC</label>
                    <div class="col-sm-10">
                       <input type="number" class="form-control" name="cvc"> 
                    </div>
            </div>
            <div class="form-group">
                    <label class="control-label col-sm-2" for="card_exp">Exp Date</label>
                    <div class="col-sm-10">
                       <input type="date" class="form-control" name="card_exp"> 
                    </div>
            </div>
            <div class="form-group">
                    
                    <input type="submit" class="btn btn-primary">
            </div> 
    </form>
</div>


@endsection