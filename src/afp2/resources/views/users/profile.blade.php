@extends('layout')
@section('content')
<div class="register_background">
    <div class="container">
        <div class="row">
            <div class="col">
                <br>
                <div class="profile_pic">
                    <i class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                    </i>
                </div>
                <h2>Hi, {{$user->username}}</h2>
                <hr class="profile_hr">
            </div>
        </div>
        <div class="profile_address_background">
            <div class="row">
                <div class="col">
                    <h2>Personal information</h2>
                    <hr class="profile_hr_address">
                    <p class="profile_info_2">
                        {{$user->first_name}} {{$user->last_name}}<br>
                        {{$user->email}}<br>
                        {{$user->birthdate}} 
                    </p>
                </div>
                <div class="col">
                    <br>
                    <h2>Shipping Address</h2>
                    <hr class="profile_hr_address">
                    <p class="profile_info">
                        {{$user->SAddress->country}}<br>
                        {{$user->SAddress->post_code}}<br>
                        {{$user->SAddress->city}}<br>
                        {{$user->SAddress->street}} {{$user->SAddress->house}}<br>
                        {{$user->SAddress->note}}<br>
                    </p>

                    <h2>Billing Address</h2>
                    <hr class="profile_hr_address">
                    <p class="profile_info"> 
                        {{$user->BAddress->country}}<br>
                        {{$user->BAddress->post_code}}<br>
                        {{$user->BAddress->city}}<br>
                        {{$user->BAddress->street}} {{$user->SAddress->house}}<br>
                        {{$user->BAddress->note}}<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection