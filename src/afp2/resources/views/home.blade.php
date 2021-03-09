@extends('layout')


@section('content')
    <h1>Hello,  
        @if (Auth::check())
            {{ Auth::user()->last_name }}
        @else
            Visitor!
        @endif
    
    </h1>
@endsection