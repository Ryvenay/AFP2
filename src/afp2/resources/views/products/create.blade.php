@extends('layout')

@section('content')
<script type="text/javascript" src="js/billing_address_swicther.js"></script>

<div class="register_background">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="register_welcome">Product Create</h1>
                <div class="register_form_background">

                    <form id="regform" class="register_form" method = "post" action="/">

                    <h1 class="register_h1">Product Information</h1>
                        <div class="row">
                            <label id="lbl_padding" for="rusername" class="col-sm-3 col-form-label">Name</label>
                            <div class="col">
                                <input type="text"  class="form-control" id="rusername" name="name" required>
                            </div>
                        </div>

                        <div class="row" id="register_row_padding">
                            <label id="lbl_padding" for="rpassword" class="col-sm-3 col-form-label">Brand</label>
                            <div class="col">
                                <input type="text" class="form-control" id="rpassword" name="brand" required>
                            </div>
                        </div>

                        <div class="row" id="register_row_padding">
                            <label id="lbl_padding" for="remail" class="col-sm-3 col-form-label">Category</label>
                            <div class="col">
                                <input type="text"  class="form-control" id="remail" name="category" required>
                            </div>
                        </div>

                        <div class="row" id="register_row_padding">
                            <label id="lbl_padding" for="rfirstname" class="col-sm-3 col-form-label">Quantity</label>
                            <div class="col">
                                <input type="text"  class="form-control" id="rfirstname" name="quantity" required>
                            </div>
                        </div>

                        <div class="row" id="register_row_padding">
                            <label id="lbl_padding" for="rlastname" class="col-sm-3 col-form-label">Price</label>
                            <div class="col">
                                <input type="text"  class="form-control" id="rlastname" name="price" required>
                            </div>
                        </div>
                        <div class="row" id="register_row_padding">
                        <label id="lbl_padding" class="col-sm-3 col-form-label" for="inputGroupFile01">Choose file</label>
                            <div class="col">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" name="picture">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="register_row_padding">
                            <label id="lbl_padding" for="rbirthdate" class="col-sm-3 col-form-label">Excerpt</label>
                            <div class="col">
                                <input type="text"  class="form-control" id="rbirthdate" name="excerpt" required>
                            </div>
                        </div>
                        <div class="row" id="register_row_padding">
                            <label id="lbl_padding" for="rbirthdate" class="col-sm-3 col-form-label">Description</label>
                            <div class="col">
                                <input type="text"  class="form-control" id="rbirthdate" name="description" required>
                            </div>
                        </div>

                        <div class="padding_bottom">
                        <br>
                            <input class="btn btn-primary" id="register_btn" type="submit" value="Add">
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
