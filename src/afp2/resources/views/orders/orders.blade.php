@extends('layout')
@section('content')

<h2>Orders</h2>
<hr>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">order id</th>
                <th scope="col">user id</th>
                <th scope="col">order time</th>
                <th scope="col">status</th>
            </tr>
        </thead>


        <tbody>
            @foreach($orders as $order)
                <tr>
                    <th>{{$order -> id}}</td>
                    <td>{{$order -> user_id}}</td>
                    <td>{{$order -> created_at}}</td>
                    <td>{{$order -> status}}</td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>


@endsection