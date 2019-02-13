@extends('layouts.layout')

@section('content')

<h1>investments index page</h1>

<ul>
    @foreach ($investments as $investment)
        <li>
            {{ $investment->name}}
        </li>
        <li>
            {{ $investment->recipient}}
        </li>   
        <li>
            {{ $investment->amount}}
        </li>
        <hr>
    @endforeach
</ul>

@endsection
