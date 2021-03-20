@extends('layout')

@section('content')
<div class="login_background">
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
                            @error("email")<p class = "login_error">{{ $errors }}</p>@enderror
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
                <img class="login_logo_img"
                src="img/logo/logo_lighter.png">
                <h1> Welcome to our webshop! </h1>
                </div>

                <div>
                    <p>On this page, you can login or register to our webshop.</p>
                </div>
                <div>
                <input class="btn btn-primary" id="login_register_btn" type="submit" value="Register">
                <input class="btn btn-primary" id="login_forgot_btn" type="submit" value="Forgot password">
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
</div>

@endsection