<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class UserController extends Controller
{
    public function getRoles()
    {
    	$result = DB::table('role')->get();

    	return json_encode($result);
    }

    public function getUsers()
    {
    	$result = DB::table('users')
                    ->join('role','users.role_id','=','role.id')
                    ->get();

    	return json_encode($result);
    }
}
