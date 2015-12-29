!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');

window.fbAsyncInit = function() {
  FB.init({
appId  : '207116939623586', //
status : true, // check login status
cookie : true, // enable cookies to allow the server to access the session
xfbml  : true  // parse XFBML
});
};
(function() {
  var e = document.createElement('script');
  e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
  e.async = true;
  document.getElementById('fb-root').appendChild(e);
}());

function share(type){
  var canvas  = document.getElementById("main-canvas");
  var dataURL = canvas.toDataURL();
  $.ajax({
    type: "POST",
    url: BASE_URL+"/upload",
    data: {
     base64_image: dataURL,
     _token:$('#token').val(),
   }
 }).done(function(response) {
  if (response.code==1){
    if (type=='FB') {
      FB.ui({
        method: 'feed',
        name: 'Badge-Composer',
        link: 'http://www.facebook.com',
          picture: response.file,  //Should replaced width dataurl image
          caption: 'Badge-Composer',
          description: 'This Example Badge Composer',
          message: ''
        });
    }
    if (type=='twitter') {
      var width  = 575,
      height = 400,
      left   = ($(window).width()  - width)  / 2,
      top    = ($(window).height() - height) / 2,
      url    = 'https://twitter.com/intent/tweet?url=' + encodeURI(response.url),
      opts   = 'status=1' +
      ',width='  + width  +
      ',height=' + height +
      ',top='    + top    +
      ',left='   + left;

      window.open(url, 'twitter', opts);
    }
  }
});
}


// This is Code popup Email
function showMail(state){
  var x = document.getElementById("#share_email");
  x = $("#backbtn").hide();
  if (state) {
    $('.wrapperemail').show();
    $('.wrapcanvas').hide();
  } else{
    $('.wrapperemail').hide();
    $('.wrapcanvas').show();
  }
}
$(document).ready(function(){
  $("#bck").click(function(){
    $("#backbtn").show();
  });
});

$(document).ready(function(){
  $("#bck1").click(function(){
    $("#backbtn").show();
  });
});



// This is Code Share image via Email

$('#button-blue').click(function(e){
  e.preventDefault();
  var canvas  = document.getElementById("main-canvas");
  var dataURL = canvas.toDataURL();
  $.ajax({
    type: "POST",
    url: BASE_URL+"/shareemail",
    data: {

      email_name:$('#email_name').val(),
      email_sender:$('#email_sender').val(),
      email_receiver:$('#email_receiver').val(),
      email_comment:$('#email_comment').val(),
      base64_image: dataURL,
      _token:$('#token').val(),
    }
  }).done(function(response) {
    console.log(response);
    if (response.code==1){
      window.location.href = response.url;


    }
  });

});

// This is The code to Required input gewinnspiel formular 

function InvalidMsg(textbox) {

  if (textbox.value == '') {
    textbox.setCustomValidity('Required email address');
  }
  else if(textbox.validity.typeMismatch){
    textbox.setCustomValidity('please enter a valid email address');
  }
  else {
    textbox.setCustomValidity('');
  }
  return true;
}

function InvalidName(textbox) {

  if (textbox.value == '') {
    textbox.setCustomValidity('Required Your Name');
  }
  else if(textbox.validity.typeMismatch){
    textbox.setCustomValidity('Required only String/Character');
  }
  else {
    textbox.setCustomValidity('');
  }
  return true;
}

