<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
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
            Session::put('userLogin', $user[0]);
            if($user[0]->permission == 0) {
                $user = User::where('permission', 2)->get();
                $title = 'Danh Sách Cộng Tác Viên';
                return view('list.danhsachuser',['listUser'=> $user, 'title'=> $title]);
            } else {
                return redirect('/lesson/lesson-list');
            }
        }
        return redirect('user/login')->with('thongbao','Sai tai khoản hoặc mật khẩu');
    }

    public function loginMember(Request $request) {
        $user = User::where('email', $request->username)->where('passWord', $request->pass)->get();
        if(count($user) > 0){
            $_SESSION['user'] = $user[0];
            Session::put('userLogin', $user[0]);
            $lesson = lesson::All();
            if($user[0]->permission == 0) {
                $user = User::where('permission', 2)->get();
                $title = 'Danh Sách Cộng Tác Viên';
                return view('list.danhsachuser',['listUser'=> $user, 'title'=> $title]);
            } else {
                return redirect('/lesson/lesson-list');
            }
        }
    }

    public function logOutAdmin() {
        unset($_SESSION['user']);
        Session::forget('userLogin');
        return view('auth.login');
    }

    public function register() {
        return view('auth.register');
    }       

    public function viewLogin() {
        if(isset($_SESSION['user'])) {
            
            if($_SESSION['user']->permission == 0) {
                $user = User::where('permission', 2)->get();
                $title = 'Danh Sách Cộng Tác Viên';
                return view('list.danhsachuser',['listUser'=> $user, 'title'=> $title]);
            } else {
                Session::put('userLogin', $_SESSION['user']);

                return redirect('/lesson/lesson-list');
            }
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
        $user->permission = 1;
        $user->gender = $request->gender;
        $user->updated_at = null;
        $user->save();
        return redirect('user/register')->with('thongbao','Thêm thành công');

    }

    public function viewCreateUser() {
        return view('auth.create-user');
    }

    public function createUserAdmin(Request $request) {
        $user = new User;
        $user->full_name = $request->name;
        $user->birthday = $request->birthday;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->remember_token = $request->token;
        $user->permission = 2;
        $user->gender = $request->gender;
        $user->updated_at = null;
        $user->save();
        return redirect('/admin/view-create-user')->with('thongbao','Thêm thành công');
    }

    public function listUser($id) {
        $user = User::where('permission', $id)->get();
        $title = '';
        if($id == 1) {
            $title = 'Danh Sách Học Viên';
        } else {
            $title = 'Danh Sách Cộng Tác Viên';

        }
        return view('list.danhsachuser',['listUser'=> $user, 'title'=> $title]);
    }

    public function viewUpdateUser($id) {
        $user = User::Find($id);
        return view('sua.updateuser',['user'=> $user]);
    }

    public function updateUser(Request $request) {
        $user = User::Find($request->id);
        $user->full_name = $request->name;
        $user->birthday = $request->birthday;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->gender = $request->gender;
        $user->save();
        $users = User::where('permission', $user->permission)->get();
        $title = '';
        if($user->permission == 1) {
            $title = 'Danh Sách Học Viên';
        } else {
            $title = 'Danh Sách Cộng Tác Viên';

        }
        $title = 'Danh Sách Cộng Tác Viên';
        return view('list.danhsachuser',['listUser'=> $users, 'title'=> $title]);
    }

    public function delete($id){
        $user = User::Find($id);
        $users = User::where('permission', $user->permission)->get();
        $title = '';
        if($user->permission == 1) {
            $title = 'Danh Sách Học Viên';
        } else {
            $title = 'Danh Sách Cộng Tác Viên';

        }
        $user->delete();
        return view('list.danhsachuser',['listUser'=> $users, 'title'=> $title]);

    }
}
