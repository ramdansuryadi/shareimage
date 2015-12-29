@extends('master')

@section('title', 'Page Title')

@section('content')

          <div class="container">

            <div class="logo">
              <img src="{{asset('img/logo.png')}}" alt="" />
            </div>

            <div class="welcome-msg">
              Hier kommt ein kleiner Einweisungstext<br> hin kurze Erklarung was hier passiert
            </div>

            <div class="placeholder">
              <img src="{{asset('img/placeholder.png')}}" alt="" align="midle"/>
            </div>

            <div class="action">
              <a href="{{ url('/composer')}}" class="act-button" >Call to Action</a>
            </div>

          </div>

@endsection
