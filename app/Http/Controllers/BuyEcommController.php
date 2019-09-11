<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Buy;
use App\Ecomm;use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Arr;


class BuyEcommController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function buy(Request $request, $id)
    {

        
        return view('ecomm.buy')->with('id',$id);

    }

    public function store(Request $request, $id)
    {

        $validate = $request->validate([
            'card'=>'required',
            'cvc'=>'required',
            'card_exp'=>'required',
            
        ]);        
        $user = Auth::user();
        $card = new Buy();
        $card->user_id =$user->id;
        $card->card_num = $request->card;
        $card->card_cvc= $request->cvc;
        $card->card_exp= $request->card_exp;
        $card->save();    
        $item_id = $id;
        $cart_items = DB::table('carts')->get()->where('item_id',$item_id)->toArray();
        foreach($cart_items as $item)
        {
                $arr_str = $item->belongs_to_user;
                $arr_int = array_map('intval', explode(',', $arr_str));
                $key_of_id = array_search($user->id,$arr_int);
                unset($arr_int[$key_of_id]);
                $arr_str_new = implode($arr_int,',');
                DB::table('carts')->where('item_id',$item_id)->update(['belongs_to_user'=>$arr_str_new]);
                return 'success all';
        }
    }


}
