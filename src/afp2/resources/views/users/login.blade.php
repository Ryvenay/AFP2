@extends('layout')

@section('content')
<form method = "post" action= "/">
    <div class="mb-3 row">
        <label for="aemail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="text"  class="form-control" id="aemail" name="email" required>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="apassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
        <input type="password" class="form-control" id="apassword" name="password" required>
        </div>
  </div>
  <div>
        <p class = "asd">{{ $errors }}</p>
        <input class="btn btn-primary" type="submit" value="Submit">
  
    </div>
    @csrf
</form>
@endsection