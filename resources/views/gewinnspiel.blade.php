@extends('master')

@section('title', 'Page Title')

@section('content')

          <div class="container">

            <div class="logo">
             
            </div>

            <div class="welcome-msg text-black">
              Herzlichen Gluckwunsch!<br> Dein Badge wurde erfolgreich geshared!
            </div>

            <div class="placeholder">
              <img src="{{asset('img/placeholder.png')}}" alt="" align="midle"/>
            </div>

            <div class="yes">
              <a href="{{ url('/')}}" class="act-button" >Mochtest du noch ein<br> Badge erstellen?</a>
            </div>

               <div class="no">
              <a href="{{ url('/gewinnspiel-formular')}}" class="act-button" >Klicke hier um an dem<br>Gewinnspiel teilzunehmen</a>
            </div>

          </div>

@endsection
