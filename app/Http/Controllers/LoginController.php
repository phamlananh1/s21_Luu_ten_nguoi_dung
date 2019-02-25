<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        //lay thong tin dang nhap tu request duoc gui len tu trinh duyet
        $username = $request->inputUsername;
        $password = $request->inputPassword;

        //kiem tra thong tin dang nhap
        if ($username == 'admin' && $password == '123456') {
            //neu thong tin dang nhap dung , Tao 1 session luu tru trang thai dang nhap
            $request->session()->push('login', true);
            //di den route show.blog, De chuyen huong nguoi dung den tran blog
            return redirect()->route('show.blog');

        }
        //neu thong tin dang nhap sai, gan thong bap vao session
        $message ='Dang nhap khong thanh cong. Ten nguoi dung hoac mat khau khong dung.';
        $request->session()->flash('login-fail', $message);

        //quay tro lai trang dang nhap
        return view('login');
    }
}

