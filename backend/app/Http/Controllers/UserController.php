<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show()
    {
      $users = DB::select('select * from users');
      $data = ['msg' => 'all list', 'users' => $users];
      return view('user.show', $data);
    }
}