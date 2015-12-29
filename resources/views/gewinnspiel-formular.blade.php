@extends('master')

@section('title', 'Page Title')

@section('content')

<div class="container">
  <div class="logo"></div>
  <div class="Gewinnspiel-msg text-black">
    <p>Um an dem Gewinnspiel teilzunehmen<br> trage hier deine Daten ein</p>
  </div>
  <form class="form" method="POST" action="{{ url('/confirm') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="name">
      <input name="name" type="text"  placeholder="Name" id="name" value="{{ old('name') }}" oninvalid="InvalidName(this);"  oninput="InvalidName(this);" required="required" /> 
    </div>
    <div class="email">
      <input name="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Emailadresse" value="{{ old('email') }} "   oninvalid="InvalidMsg(this);"  oninput="InvalidMsg(this);"  type="email" required="required" /> 

    </div>
    <div class="check">
      <input id="c1" name="checkbox" type="checkbox" oninvalid="InvalidCheck(this);"  required="required" /> 
      <label for="c1">Hiermit akzeptiere ich die Teilnahme und Datenschutzbedingungen<span></span></label>
    </div>
    <div class="action">
      <button type="Submit"  value="Submit"   class="act-button-confirm">Confirm</button>

    </div>
  </form>

  <!-- Modal Succes-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <?php if (Session::has('success')): ?>
        <?php if (Session::get('success')): ?>

        <div class="textcontent"> 

          Du hast erfolgreich am<br>Gewinnspiel teilgenommen
          <div class="check2">
            <img src="img/check2.jpg" alt="check"> 
          </div>
        </div>
      <?php else: ?>


      <div class="textcontent"> 
        Du hast bereits teilgenommen!
        <div class="check2">
          <img src="img/check2.jpg" alt="check"> 
        </div>
      </div>

    <?php endif ?>

  <?php endif ?>
</div>
</div>
</div>
</div>
</div><!--END CONTAINER -->
<?php if (Session::has('success')): ?>
  <script type="text/javascript">
  $('#myModal').modal('show');

  </script>
<?php endif ?>

@endsection







