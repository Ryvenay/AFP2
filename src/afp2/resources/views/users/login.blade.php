@extends('layout')

@section('content')


<div class="login_background">
@if ($alert == 1)
<div class="alert alert-primary" role="alert">
 Please <b>log in</b> first to access all funtion of the website!
</div>
@endif
<div class="login_container_back"  id="login_">
    <div class="container">
        <div class="row">
        <div class="col">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form class="login_form" method = "post" action= "/">
                        <div class="row">
                            <label for="aemail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col">
                            <input type="text"  class="form-control" id="aemail" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <label for="apassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col">
                            <input type="password" class="form-control" id="apassword" name="password" required>
                            </div>
                        </div>
                        <div>
                            @error("email")<br><div class="login_error"><p>{{ $errors->first('email') }}</p></div>@enderror
                            <br>
                            <input class="btn btn-primary" id="login_btn" type="submit" value="Login">
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        </div>
            <div class="col" id="login_right">
                <div>
                    <img class="login_logo_img" src="img/logo/logo_lighter.png">
                    <img class="login_logo_img_itstore" src="img/logo/logo_itstore.png">
                    <br>
                <h1> Welcome to our webshop! </h1>
                </div>

                <div>
                    <p>On this page, you can login or register to our webshop.</p>
                </div>
                <div class="col-md-6">
                    <a id="login_forgot_btn" class="btn btn-primary" href="/forgotpsw" role="button">Forgot password</a>
                    <br>
                    <a href="/register"><input class="btn btn-primary" id="login_register_btn" type="submit" value="Register"></button></a>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
</div>

@endsection