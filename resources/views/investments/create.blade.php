@extends('layouts.layout')

@section('content')

<h1>Create new investment page</h1>

<form method="POST" action="/investments">

    {{ csrf_field() }}
    <div>
        <input type="text" name="name" placeholder="name" class="input {{ $errors->has('name') ? 'is-danger' : '' }}" value="{{ old('name') }}" required>
    </div> 
    <div>
        <input type="text" name="recipient" placeholder="Transfer to" class="input {{ $errors->has('recipient') ? 'is-danger' : '' }}" value="{{ old('recipient') }}" required>
    </div>  

    <div>
        <input type="number" name="amount" placeholder="Amount" class="input {{ $errors->has('amount') ? 'is-danger' : '' }}" value="{{ old('amount') }}" required>
    </div>        

    <div>
        <button type="submit">Transfer</button>
    </div>

    @include('errors')
</form>

@endsection
