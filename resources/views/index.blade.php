@extends('master')

@section('title', 'Page Title')

@section('content')


  <div class="container clearfix">

    <div class="contain">

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Hintergrund
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" data-item="BG">
              <div class="panel-body">
                <div class="list-bg">
                  <ul>
                    <li>
                      <input id="red" type="radio" name="name" value="" onchange="mainCanvas.setBG('red')">
                      <label for="red" class="red"></label>
                    </li>
                    <li>
                      <input id="yellow" type="radio" name="name" value="" onchange="mainCanvas.setBG('yellow')">
                      <label for="yellow" class="yellow"></label>
                    </li>
                    <li>
                      <input id="blue" type="radio" name="name" value="" onchange="mainCanvas.setBG('#1099e8')">
                      <label for="blue" class="blue"></label>
                    </li>
                    <li>
                      <input id="green" type="radio" name="name" value="" onchange="mainCanvas.setBG('green')">
                      <label for="green" class="green"></label>
                    </li>
                    <li>
                      <input id="grey" type="radio" name="name" value="" onchange="mainCanvas.setBG('grey')">
                      <label for="grey" class="grey"></label>
                    </li>
                    <li>
                      <input id="white" type="radio" name="name" value="" onchange="mainCanvas.setBG('white')">
                      <label for="white" class="white"></label>
                    </li>
                  </ul>
                </div>
                <div class="next">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Next
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Wappen
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" data-item="Shield">
              <div class="panel-body">

                <div id="slider-shield" class="carousel slide" data-ride="carousel">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="{{asset('img/slider/wappen/shield-1.png')}}" id="shield1" alt="...">
                      <div class="carousel-caption">
                      </div>
                    </div>
                    <div class="item">

                      <img src="{{asset('img/slider/wappen/shield-2.png')}}" alt="...">

                      <div class="carousel-caption">
                      </div>
                    </div>
                    <div class="item">

                      <img src="{{asset('img/slider/wappen/shield-3.png')}}" alt="...">
                      <div class="carousel-caption">
                      </div>
                    </div>
                    <div class="item">

                      <img src="{{asset('img/slider/wappen/shield-4.png')}}" alt="...">
                      <div class="carousel-caption">
                      </div>
                    </div>
                    <div class="item">

                      <img src="{{asset('img/slider/wappen/shield-5.png')}}" alt="...">
                      <div class="carousel-caption">
                      </div>
                    </div>
                    <div class="item">

                      <img src="{{asset('img/slider/wappen/shield-6.png')}}" alt="...">
                      <div class="carousel-caption">
                      </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#slider-shield" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#slider-shield" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>

                <div class="prev">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Prev
                  </a>
                </div>
                <div class="next">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Next
                  </a>
                </div>

              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Verzierung
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" data-item="Ornament">
              <div class="panel-body">

                <div id="slider-ornamen" class="carousel slide" data-ride="carousel">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">

                      <img src="{{asset('img/slider/verzierung/ornament-1.png')}}" alt="...">

                      <div class="carousel-caption">
                      </div>
                    </div>
                    <div class="item">

                      <img src="{{asset('img/slider/verzierung/ornament-2.png')}}" alt="...">

                      <div class="carousel-caption">
                      </div>
                    </div>
                    <div class="item">

                      <img src="{{asset('img/slider/verzierung/ornament-3.png')}}" alt="...">

                      <div class="carousel-caption">
                      </div>
                    </div>
                    <div class="item">

                      <img src="{{asset('img/slider/verzierung/ornament-4.png')}}" alt="...">

                      <div class="carousel-caption">
                      </div>
                    </div>
                    <div class="item">

                      <img src="{{asset('img/slider/verzierung/ornament-5.png')}}" alt="...">

                      <div class="carousel-caption">
                      </div>
                    </div>
                    <div class="item">

                      <img src="{{asset('img/slider/verzierung/ornament-6.png')}}" alt="...">

                      <div class="carousel-caption">
                      </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#slider-ornamen" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#slider-ornamen" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>

                <div class="prev">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Prev
                  </a>
                </div>
                <div class="next">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Next
                  </a>
                </div>

              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Banderole
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" data-item="Band">
              <div class="panel-body">

                <div id="slider-band" class="carousel slide" data-ride="carousel">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="{{asset('img/slider/banderole/band-1.png')}}" alt="...">
                      <div class="carousel-caption">
                      </div>
                    </div>
                    <div class="item">
                      <img src="{{asset('img/slider/banderole/band-2.png')}}" alt="...">
                      <div class="carousel-caption">
                      </div>
                    </div>
                    <div class="item">
                      <img src="{{asset('img/slider/banderole/band-3.png')}}" alt="...">
                      <div class="carousel-caption">
                      </div>
                    </div>
                    <div class="item">
                      <img src="{{asset('img/slider/banderole/band-4.png')}}" alt="...">
                      <div class="carousel-caption">
                      </div>
                    </div>
                    <div class="item">
                      <img src="{{asset('img/slider/banderole/band-5.png')}}" alt="...">
                      <div class="carousel-caption">
                      </div>
                    </div>
                    <div class="item">
                      <img src="{{asset('img/slider/banderole/band-6.png')}}" alt="...">
                      <div class="carousel-caption">
                      </div>
                    </div>
                  </div>


                  <!-- Controls -->
                  <a class="left carousel-control" href="#slider-band" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#slider-band" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>

                <div class="prev">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Prev
                  </a>
                </div>
                <div class="next">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Next
                  </a>
                </div>

              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFive">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  Dein Text
                </a>
              </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" data-item="Text">
              <div class="panel-body">

                <div class="form-group">
                  <input id="textIn" type="text" class="form-control" placeholder="Input Some Text" onkeyup="mainCanvas.setText('text',$(this).val());">
                </div>
                <div class="form-group">
                  <select class="form-control" onchange="mainCanvas.setText('size',$(this).val());">
                    <option value="16">16 pt</option>
                    <option value="18">18 pt</option>
                    <option value="21">21 pt</option>
                    <option value="24">24 pt</option>
                    <option value="26">26 pt</option>
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control" onchange="mainCanvas.setText('style',$(this).val());">
                    <option value="impact" class="impact">Font 1</option>
                    <option value="nerisblack" class="nerisblack">Font 2</option>
                    <option value="nerisbold_italic" class="nerisbold_italic">Font 3</option>
                    <option value="nerisregular" class="nerisregular">Font 4</option>
                    <option value="nerislight_italic" class="nerislight_italic">Font 5</option>
                  </select>
                </div>

                <div class="prev">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Prev
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingSix">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  Templates
                </a>
              </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix" data-item="Template">
              <div class="panel-body">

                <div class="list-tmp">
                  <ul>
                    <li><a href="#" onclick="mainCanvas.loadJSON('{{asset('templates/template-1.json')}}');"><img src="{{asset('img/templates/template-1.png')}}" alt=""></a></li>
                    <li><a href="#" onclick="mainCanvas.loadJSON('{{asset('templates/template-2.json')}}');"><img src="{{asset('img/templates/template-2.png')}}" alt=""></a></li>
                    <li><a href="#" onclick="mainCanvas.loadJSON('{{asset('templates/template-3.json')}}');"><img src="{{asset('img/templates/template-3.png')}}" alt=""></a></li>
                    <li><a href="#" onclick="mainCanvas.loadJSON('{{asset('templates/template-4.json')}}');"><img src="{{asset('img/templates/template-4.png')}}" alt=""></a></li>
                  </ul>
                </div>

              </div>
            </div>
          </div>

        </div><!--end panel-group #accordion -->

      </div><!--end contain -->

      <div class="bandage">

        <a class="arrow" id="backbtn" role="button" data-toggle="" data-parent="#accordion" href="{{URL::to('/')}}" aria-expanded="false"></a>

        <div class="wrapcanvas">

          <canvas id="main-canvas" class="main-canvas lower-canvas" width="400" height="400" data-origin-width="400" data-origin-height="400"></canvas>

          <div class="btnshare" id="share">
            <button onclick="share('FB')" id="share_fb" class="fb" type="button">Share on Facebook</button>
            <button onclick="share('twitter')" class="twitter" type="button">Share on Twitter</button>
            <button onclick="showMail(1);" class="email" id ="share_email" type="button">Share Via Email</button>
          </div> <!--end btn share -->

        </div>

        <div class="wrapperemail">
          <button onclick="showMail(0)" class="arrow"  type="button" id="bck1"></button>
          <div class="form-div">
          <h2 >Healine</h2>
          <p>Hier kommt ein beschreibungstext hin... Lorem Ipsum Zombie ipsum reversus <br> ab viral inferno, nam rick grimes malum cerebro. De carne lumbering animata corpora quaeritis. Summus brains sit, morbo vel maleficia?
          </p>
          <div id="form-main">

            <form class="pageemail" id="form1">
              <p class="name">
                <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="email_name" />
              </p>

              <p class="email">
                <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email_receiver" placeholder="Empfanger-Email" />
              </p>

              <p class="email">
                <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email_sender" placeholder="Absender-Email"/>
              </p>

              <p class="comment">
                <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="email_comment" placeholder="Nachricht"></textarea>
              </p>

              <div class="btnemail">
                <input type="submit" value="jetzt verschicken" class="button-blue"  id="button-blue"/>
                <input onclick="showMail(0);"  type="button" value="Abbrechen" class="button-grey" id="bck"/>
                <div class="ease"></div>
              </div>
            </form>

          </div> <!---end form-main -->
          </div><!--end form-div -->
        </div> <!-- end wrapper email -- >
      </div> <!-- end bandage




@endsection
