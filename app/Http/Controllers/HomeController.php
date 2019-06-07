<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::user()->id;
        $expenses = DB::table('expenses as e')
                        ->join('expenses_category as ec','e.category_id','=','ec.id')
                        ->where('user_id',$id)
                        ->get();
        return view('home',compact('expenses'));
    }
}
