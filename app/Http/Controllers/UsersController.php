<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function viewRoles()
    {
    	return view('viewRoles');
    }
    public function viewUsers()
    {
    	return view('viewUsers');
    }
}
