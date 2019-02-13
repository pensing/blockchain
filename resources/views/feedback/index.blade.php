@extends('layouts.layout')

@section('content')

<h1>feedback index page</h1>
@foreach($feedbacklist as $feedback)
<li>Investement: {{$feedback->investment_id}} ; Score {{$feedback->score}}</li>
@endforeach
@endsection
