@extends('layout')
@section('content')

<h2>Users</h2>
<hr>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">user id</th>
                <th scope="col">username</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">email</th>
                <th scope="col">level</th>
            </tr>
        </thead>


        <tbody>
            @foreach($users as $user)
                <tr>
                    <th>{{$user -> id}}</td>
                    <td>{{$user -> username}}</td>
                    <td>{{$user -> first_name}}</td>
                    <td>{{$user -> last_name}}</td>
                    <td>{{$user -> email}}</td>
                    <td>{{$user -> level}}</td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>


@endsection