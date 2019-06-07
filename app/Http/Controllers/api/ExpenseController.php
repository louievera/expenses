<?php

namespace App\Http\Controllers\api;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\support\facades\Input;

class ExpenseController extends Controller
{
	
    public function geExpensesCategory	()
    {
    	$result = DB::table('expenses_category')->get();

    	return json_encode($result);
    }

    public function getExpenses()
    {
    	$id = $_GET['id'];
    	$result = DB::table('expenses as e')
    					->join('expenses_category as ec','e.category_id','=','ec.id')
    					->where('user_id',$id)
    					->get();

    	return json_encode($result);
    }

    public function saveExpenses(Request $request)
    {
    	$expenseCat = $request->input('expensesCategory');
    	$amount = $request->input('amount');
    	$date = $request->input('date');
    	$userid = $request->input('userid');
    	

    	DB::table('expenses')
    		->insert(['user_id' => $userid, 'category_id' => $expenseCat, "amount" => $amount, 'date'=> $date]);
    	return redirect::to('/expenses');
    }
}
