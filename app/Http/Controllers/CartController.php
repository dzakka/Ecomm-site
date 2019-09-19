<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Ecomm;
use App\Cart;
use App\User;
use Date;
use Illuminate\Support\Arr;


class CartController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function store(Request $request)
    {

            $item_id = $request->input('item_id');
            $user=  Auth::user();
            $counter = $item_id -2;
            $cart_item = DB::table('ecomms')->get()->where('id',$item_id)->toArray();
            if($verify_item =DB::table('carts')->get()->where('item_id',$item_id)->toArray())
                    {
                        foreach($verify_item as $ind_item)
                            {
                               $old_user_id =$ind_item->belongs_to_user;
                            }
                                 
                         $arr_users_old_int = array_map('intval', explode(',', $old_user_id));                   
                        //$arr_users_old_int = json_decode($verify_item[$counter]->belongs_to_user);
                        foreach($arr_users_old_int as $user_exists)
                            {
                                if($user_exists == $user->id)
                                    {
                                        return redirect()->back()->with('message','Item already exists');
                                        break;
                                     }
                                else
                                    {
                                    $arr_users_new_int = Arr::prepend($arr_users_old_int,$user->id);        
                                    $arr_users_new_str = implode($arr_users_new_int,',');
                                    
                                    //$arr_users_new_str = json_encode($arr_users_new_int);
                                    DB::table('carts')->where('item_id',$item_id)->update(['belongs_to_user'=>$arr_users_new_str]);
                                    return redirect()->back()->with('message','Item added succesfully to you already existing cart');
                                
                            }
                        }
                        
                    }
        
                else
                    {
                        foreach($cart_item as $item)
                            {
                                $cust_cart = new Cart();
                                $cust_cart->title =$item->title;
                                $cust_cart->desc =$item->desc;
                                $cust_cart->cost =$item->cost;
                                $cust_cart->stock =$item->stock;
                                $cust_cart->image =$item->image;
                                $cust_cart->notes =$item->notes;
                                $cust_cart->category =$item->category;
                                $cust_cart->carted_at = Date('y-m-d');
                                $cust_cart->belongs_to_user= $user->id;
                                $cust_cart->item_id = $item_id;
                                $cust_cart->color = $request->input('color');
                                $cust_cart->size = $request->input('size');
                                $cust_cart->quantity = $request->input('quantity');
                                $cust_cart->save();
                                return redirect()->back()->with('message','Item added succesfully to your cart');
                            }

                    }
        
    }   

}