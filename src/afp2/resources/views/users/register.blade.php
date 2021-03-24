@extends('layout')

@section('content')
<script type="text/javascript" src="js/billing_address_swicther.js"></script>

<div class="register_background">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="register_welcome">Registration</h1>
                <h2 class="register_welcome_note">After registration you can easily buy from our site</h2>
                <div class="register_form_background">
                    <form id="regform" class="register_form" method = "post" action= "/user/successfulRegistration">
                    <h1 class="register_h1">User Informations</h1>
                        <div class="row">
                            <label id="lbl_padding" for="rusername" class="col-sm-3 col-form-label">Username</label>
                            <div class="col">
                                <input type="text"  class="form-control" id="rusername" name="username" required>
                            </div>
                        </div>

                        <div class="row" id="register_row_padding">
                            <label id="lbl_padding" for="rpassword" class="col-sm-3 col-form-label">Password</label>
                            <div class="col">
                                <input type="password" class="form-control" id="rpassword" name="password" required>
                            </div>
                        </div>

                        <div class="row" id="register_row_padding">
                            <label id="lbl_padding" for="remail" class="col-sm-3 col-form-label">Email</label>
                            <div class="col">
                                <input type="text"  class="form-control" id="remail" name="email" required>
                            </div>
                        </div>

                        <div class="row" id="register_row_padding">
                            <label id="lbl_padding" for="rfirstname" class="col-sm-3 col-form-label">First Name</label>
                            <div class="col">
                                <input type="text"  class="form-control" id="rfirstname" name="first_name" required>
                            </div>
                        </div>

                        <div class="row" id="register_row_padding">
                            <label id="lbl_padding" for="rlastname" class="col-sm-3 col-form-label">Last Name</label>
                            <div class="col">
                                <input type="text"  class="form-control" id="rlastname" name="last_name" required>
                            </div>
                        </div>

                        <div class="row" id="register_row_padding">
                            <label id="lbl_padding" for="rbirthdate" class="col-sm-3 col-form-label">Birth Date</label>
                            <div class="col">
                                <input type="text"  class="form-control" id="rbirthdate" name="birthdate" required>
                            </div>
                        </div>

                    <h1 class="register_h1">Billing Address</h1>

                        <div class="row" id="register_row_padding">
                            <label id="lbl_padding" for="rcountry" class="col-sm-3 col-form-label">Country</label>
                            <div class="col">
                                <input type="text"  class="form-control" id="rcountry" name="bcountry" required>
                            </div>
                        </div>

                        <div class="row" id="register_row_padding">
                            <label id="lbl_padding" for="rzipcode" class="col-sm-3 col-form-label">Zip Code</label>
                            <div class="col">
                                <input type="text"  class="form-control" id="rzipcode" name="bpost_code" required>
                            </div>
                        </div>

                        <div class="row" id="register_row_padding">
                            <label id="lbl_padding" for="rcountry" class="col-sm-3 col-form-label">City</label>
                            <div class="col">
                                <input type="text"  class="form-control" id="rcountry" name="bcity" required>
                            </div>
                        </div>

                        <div class="row" id="register_row_padding">
                            <label id="lbl_padding" for="rstreet" class="col-sm-3 col-form-label">Street</label>
                            <div class="col">
                                <input type="text"  class="form-control" id="rstreet" name="bstreet" required>
                            </div>
                        </div>

                        <div class="row" id="register_row_padding">
                            <label id="lbl_padding" for="rhouse" class="col-sm-3 col-form-label">House</label>
                            <div class="col">
                                <input type="text"  class="form-control" id="rhouse" name="bhouse" required>
                            </div>
                        </div>

                        <div class="row" id="register_row_padding">
                            <div id="address_separator_padding" class="col">
                            <input id="chbox" class="form-check-input" type="checkbox" value="" id="rcheckaddress" autocomplete="off" onclick="showMe('register_billing_address')"/>
                            <label class="form-check-label" for="rcheckaddress">
                                Same billing and shipping address
                            </label>
                            </div>
                        </div>

                            <div id="register_billing_address">
                                <div class="row" id="register_row_padding">
                                    <label id="lbl_padding" for="rcountry" class="col-sm-3 col-form-label">Country</label>
                                    <div class="col">
                                        <input type="text"  class="form-control" id="rcountry" name="scountry" required>
                                    </div>
                                </div>

                                <div class="row" id="register_row_padding">
                                    <label id="lbl_padding" for="rzipcode" class="col-sm-3 col-form-label">Zip Code</label>
                                    <div class="col">
                                        <input type="text"  class="form-control" id="rzipcode" name="spost_code" required>
                                    </div>
                                </div>

                                <div class="row" id="register_row_padding">
                                    <label id="lbl_padding" for="rcountry" class="col-sm-3 col-form-label">City</label>
                                    <div class="col">
                                        <input type="text"  class="form-control" id="rcountry" name="scity" required>
                                    </div>
                                </div>

                                <div class="row" id="register_row_padding">
                                    <label id="lbl_padding" for="rstreet" class="col-sm-3 col-form-label">Street</label>
                                    <div class="col">
                                        <input type="text"  class="form-control" id="rstreet" name="sstreet" required>
                                    </div>
                                </div>

                                <div class="row" id="register_row_padding">
                                    <label id="lbl_padding" for="rhouse" class="col-sm-3 col-form-label">House</label>
                                    <div class="col">
                                        <input type="text"  class="form-control" id="rhouse" name="shouse" required>
                                    </div>
                                </div>
                            </div>

                        <div>
                        
                            <br>
                            <input class="btn btn-primary" id="register_btn" type="submit" value="Register">
                        </div>
                        @csrf
            </form>
            </div>
            </div>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    </div>
</div>

@endsection
