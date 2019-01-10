@extends('layouts.app')

@section('content')

<div class="info">
    <div class="nav">
        <div class="logo">
            <a href="/"><img src="{{ asset('img/Fono_Text_logo.png') }}"  alt="fono"></a>
        </div>
        <div class="navmenu" id="myTopnav">
            <a href="#one" class="navbar-item" onclick="myFunction()">Intro</a>
            <a href="#two" class="navbar-item" onclick="myFunction()">How</a>
            <a href="#three" class="navbar-item" onclick="myFunction()">Team</a>
            <a href="#four" class="navbar-item" onclick="myFunction()">Prices</a>
            <a href="#five" class="navbar-item" onclick="myFunction()">Socials</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a> 
        </div>
    </div>
    <div id="one"class="middleContent">
        <h1>What is Fono?</h1>
        <p class="ipsum">
        Fono is a modern twist on the beloved record player. With fono you can choose what is on your record at all times. Connect your record with the corresponding fono app, 
        Search for the music you want to put on your record, drag it in the list and click confirm, that's how easy it is! Now you can play your own music to your hearts content on this nostalgic, modern looking record player. 
        </p>
        <div class="buttonContainer hide">
            <a href="https://test.lucas.sledsens.mtantwerp.eu" class="button">Select music!</a>
        </div>
    </div>
    <div id="two" class="bottomContent">
        <div class="working">
            <h1>How does Fono work?</h1>
            <p>
            Fono records arent't actually vinyl, every record has an nfc chip and the player has an nfc reader that can quickly tell what music is on the record. You scan the qr code that's located on the top of the record
            and you will be redirected to our online application. There you can easily select your choice of music. Simply click confirm and the information will be sent to the record. 
            </p>
        </div>
    </div>
    <div id="three" class="team">
        <h1>The team</h1>
        <div class="teamMember"><img src="{{ asset('img/thomas.jpg') }}" alt="Thomas Minnebo"><p>Thomas Minnebo</p><p><b>Project Leader</b></p></div>
        <div class="teamMember"><img src="{{ asset('img/jeremy.jpg') }}" alt="Jeremy Declerck"><p>Jeremy Declerck</p><p><b>Developer</b></p></div>
        <div class="teamMember"><img src="{{ asset('img/lucas.jpg') }}" alt="Lucas Sledsen"><p>Lucas Sledsen</p><p><b>Developer</b></p></div>
        <div class="teamMember"><img src="{{ asset('img/geordi.jpg') }}" alt="Geordi Feijens"><p>Geordi Feijens</p><p><b>Designer</b></p></div>
    </div>
    
    <div id="four" class="formulas">
        <h1>Formulas</h1>
        <ul>
            <li class="formula">
               <h3 class="formuleTitel">VIP Package</h3>
               <hr/>
                <p class="formuleSpec">Fono Player</p>
                <p class="formuleSpec">Sound System</p>
                <p class="formuleSpec">10 Blanco LP's</p>
                <p class="formuleSpec">€250</p>
            </li>
            <li class="formula">
                <h3 class="formuleTitel">Complete Package</h3>
                <hr/>
                <p class="formuleSpec">Fono Player</p>
                <p class="formuleSpec">10 Blanco LP's</p>
                <p class="formuleSpec">€170</p>
            </li>
            <li class="formula">
                <h3 class="formuleTitel">Starterpack</h3>
                <hr/>
                <p class="formuleSpec">Fono Player</p>
                <p class="formuleSpec">3 Blanco LP's</p>
                <p class="formuleSpec">€150</p>
            </li>
            <li class="formula">
                <h3 class="formuleTitel">LP Big Pack</h3>
                <hr/>
                <p class="formuleSpec">10 Blanco LP's</p>
                <p class="formuleSpec">€40</p>
            </li>
            <li class="formula">
                <h3 class="formuleTitel">LP Small Pack</h3>
                <hr/>
                <p class="formuleSpec">5 Blanco LP's</p>
                <p class="formuleSpec">€25</p>
            </li>
        </ul>
    </div>
    
    <div id="five" class="socials">
        <h1>Visit our social media!</h1>
        <div class="social-links">
            <a href="https://www.facebook.com/fonoAntwerpen"><i class="fab fa-facebook-square"></i></a>
            <a href="https://www.instagram.com/fono.official/"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
@endsection
