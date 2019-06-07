<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    //
    public function viewExpenses()
    {
    	return view('viewExpenses');
    }

    public function viewExpensesCategory()
    {
    	return view('viewExpenseCategory');
    }
}
