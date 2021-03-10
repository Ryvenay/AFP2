@extends('layout')


@section('content')
    <h1>Hello,  
        @if (Auth::check())
            {{ Auth::user()->username }}
        @else
            Visitor!
        @endif
    </h1>
    
@endsection