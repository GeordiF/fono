@extends('layouts.app')

@section('content')
<div class="logo">
    <img src="{{ asset('img/Fono_Text_logo.png') }}"  alt="fono">
</div>
<div class="error">
    <h1>404 Page not found!</h1>
</div>
<div class="buttonContainer errorButton">
    <a href="/info" class="button">Go back!</a>
</div>

@endsection