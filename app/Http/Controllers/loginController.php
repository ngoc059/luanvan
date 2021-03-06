<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\lesson;
session_start();
class LoginController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginAdmin(Request $request) {
       return $this->login($request->username, $request->pass);
    }

    private function login($userName, $passWord) {
        $user = User::where('email', $userName)->where('passWord', $passWord)->get();
        if(count($user) > 0){
            $_SESSION['user'] = $user[0];
            $lesson = lesson::All();
            return view('learn.listlesson',['lessons'=> $lesson]);
        }
        return redirect('user/login')->with('thongbao','Sai tai khoản hoặc mật khẩu');
    }

    public function loginMember(Request $request) {
        $user = User::where('email', $request->username)->where('passWord', $request->pass)->get();
        if(count($user) > 0){
            $_SESSION['user'] = $user[0];
            $lesson = lesson::All();
            return view('learn.listlesson',['lessons'=> $lesson]);
        }
    }

    public function logOutAdmin() {
        unset($_SESSION['user']);
        return view('auth.login');
    }

    public function register() {
        return view('auth.register');
    }       

    public function viewLogin() {
        if(isset($_SESSION['user'])) {
            $lesson = lesson::All();
            return view('learn.listlesson',['lessons'=> $lesson]);
        }
        return view('auth.login');
    }

    public function createUser(Request $request) {
        $user = new User;
        $user->full_name = $request->name;
        $user->birthday = $request->birthday;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->remember_token = $request->token;
        $user->gender = $request->gender;
        $user->save();
        return view('auth.login');

    }
}
