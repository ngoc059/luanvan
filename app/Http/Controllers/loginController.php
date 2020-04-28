<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
session_start();
class LoginController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginAdmin(Request $request) {
        $user = User::where('email', $request->username)->where('passWord', $request->pass)->get();
        return $user;
    }
}
