<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Ecomm;
use Auth;
use Illuminate\Http\Request;

class EcommController extends Controller
{
    //

    public function insert()
    {

        return view('ecomm.insert');
    }

    public function show()
    {
        
        $values = DB::table('ecomms')->simplePaginate(1);
        return view('ecomm.show')->with('values',$values);
        
    }

    public function store(Request $request)
    {

        $validate = $request->validate([
            'title'=>'required',
            'desc'=>'required',
            'cost'=>'required',
            'stock'=>'required'
        ]);
        
        $title = $request->input('title');
        $desc = $request->input('desc');
        $cost = $request->input('cost');
        $stock = $request->input('stock');
        $items = new Ecomm();
        $items->title = $title;
        $items->desc = $desc;
        $items->cost = $cost;
        $items->stock = $stock;
        $items->image = 'nothing';
        if($items->save())
        {
        return redirect()->back()->with('message','Item added succesfully');
        }
        else
         return redirect()->back()->with('error','There was some error');
    }
}
