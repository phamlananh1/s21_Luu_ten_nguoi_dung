@extends('layouts.master')
@section('content')
    <div class="title m-d-md">
        Dang nhap

    </div>

    @if (Session::has('login-fail'))
        <div class="login-fail">
            <p class="text-danger">{{ Session::get('login-fail') }}</p>
        </div>
    @endif

    <!-- Hiển thị trạng thái chưa đăng nhập -->
    @if (Session::has('not-login'))
        <div class="not-login">
            <p class="text-danger">{{ Session::get('not-login') }}</p>
        </div>
    @endif


    <div class="form-login">
        <form class="text-left" method="post" action="{{route('user.login')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="inputUsername">Ten nguoi dung</label>
                <input type="text"
                       class="form-control"
                       id="inputUsername"
                       name="inputUsername"
                       placeholder="Enter username"
                       required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password"
                       class="form-control"
                       id="inputPassword"
                       name="inputPassword"
                       placeholder="Password"
                       required>

            </div>
            <button type="submit" class="btn btn-primary">Dang nhap</button>
        </form>
    </div>
@endsection