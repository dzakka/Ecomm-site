<?php

namespace App\Http\Controllers;
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
        
        $values = DB::table('ecomms')->simplePaginate(3);
        return view('ecomm.show')->with('values',$values);
        
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'title'=>'required',
            'desc'=>'required',
            'cost'=>'required',
            'stock'=>'required',
            'color'=>'required',
            'category'=>'required',
            'photo'=>'required',
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
        $items->category =$request->input('category');
        $items->notes =$request->input('notes');
        $items->small= $request->input('small');
        $items->large= $request->input('large');
        $items->extra_large= $request->input('extra-large');
        $items->color= $request->input('color');
        if($request->hasFile('photo'))
          {
            $allowedExt = ['png','jpeg'];
            $files = $request->file('photo');
            $filename = $files->getClientOriginalName();
            $extension = $files->getClientOriginalExtension();
            $check = in_array($extension,$allowedExt);
            $files->move('images/',$filename);
            $items->image=$filename;  
            if($items->save())
                {
                    
                    return redirect()->back()->with('message','Item added succesfully');
                    
                }
            else
                {
                return redirect()->back()->with('error','There was some error');
                }
          }
          else
          {
              return redirect()->back()->with('error','please uplaod the file');
          }
        
        return ;
    }
       



}
