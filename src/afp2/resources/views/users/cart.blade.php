@extends('layout')

@section('content')

<h2>Your cart</h2>

@guest
<div class="alert alert-danger" role="alert">
  Please log in to view your cart
</div>
@endguest

@auth
<div class="container">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Product name</th>
        <th scope="col">Amount</th>
        <th scope="col">Price</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>

    @php
        $counter = 0;
        $total = 0;
    @endphp
    
    @foreach($cart as $cartitem)
        @php
            $counter += $cartitem->amount;
            $total += $cartitem->amount * $cartitem->product->price;
        @endphp

        <tr>
            <th scope="row">{{ $loop->index + 1 }}</th>
            <td>{{ $cartitem->product->brand }} {{ $cartitem->product->name }}</td>
            <td>{{ $cartitem->amount }}</td>
            <td>{{ $cartitem->amount * $cartitem->product->price }}</td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td></td>
            <td>Total: </td>
            <td>{{ $counter }}</td>
            <td>{{ $total }}</td>
            <td></td>
        </tr>
    </tfoot>
    </table>
</div>

@endauth

@endsection