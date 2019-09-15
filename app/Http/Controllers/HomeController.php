<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Ecomm;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function show()
    {   
        
        
        $values = DB::table('ecomms')->simplePaginate(9);
        return view('welcome')->with('values',$values);
    }

    
}
