<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;



class UserCartController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index()
    {
        $show_items = array();
        $show_items_all = array();
        $user=  Auth::user();
        
        $custom_cart = DB::table('carts')->get();
        $counter = count ($custom_cart);
        foreach($custom_cart as $cart_items)
         {
            $get_user_id = $cart_items->belongs_to_user;
            $arr_users_old_int = array_map('intval', explode(',', $get_user_id));                   
            if(in_array($user->id,$arr_users_old_int))
            {
                array_push($show_items, $cart_items);
                
            }
         }
         return view('ecomm.cart')->with('cart_items',$show_items);      
     
    }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         

}
