<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Ecomm;


class IndItemController extends Controller
{
    //
        public function show(Request $request ,$id)
        {

               $items= DB::table('ecomms')->get()->where('id',$id)->toArray();
               return view('ecomm.inditem')->with('items',$items);



        }



}
