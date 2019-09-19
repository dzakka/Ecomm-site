<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Ecomm;
use Illuminate\Support\Arr;


class IndItemController extends Controller
{
    //
        public function show(Request $request ,$id)
        {       
                $new_color = array();    
                $items= DB::table('ecomms')->get()->where('id',$id)->toArray();
                $all_items = DB::table('ecomms')->Paginate(5);
               foreach($items as $item)
               {
                    $new_color =array_map('strval', explode(',',$item->color));
                    
               }
               //$new_items = Arr::prepend($items,$new_color);        
               return view('ecomm.inditem')->with('items',$items)->with('colors',$new_color)->with('all_items',$all_items);
               //dd($new_color);



        }



}
