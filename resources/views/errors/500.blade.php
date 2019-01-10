@extends('layouts.app')

@section('content')
<div class="logo">
    <img src="{{ asset('img/Fono_Text_logo.png') }}"  alt="fono">
</div>
<div class="error">
    <h2>500 internal server error, refresh in a few moments!</h2>
</div>
<div class="buttonContainer">
    <a href="/info" class="button">Meet Fono</a>
</div>

@endsection