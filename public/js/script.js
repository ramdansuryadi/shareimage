'use strict';

var mainCanvas = {
 canvas: null,
 imageShield: null,
 imageOrnament: null,
 imageBand: null,
 textInsert: null,
 items : {shield:0, ornament:0, band:0, text:0},

 init: function(id){
  var newCanvas = new fabric.Canvas(id,{
    setBorderColor: 'black'
   });
   this.canvas = newCanvas;
   this.imageShield = new fabric.Image(null, {
     left: 90,
     top: 90,
     angle: 0,
     opacity: 1,
     objectId: 'shield',
     selectable: false
   });
   this.canvas.add(this.imageShield);
   this.imageOrnament = new fabric.Image(null, {
     left: 90,
     top: 90,
     angle: 0,
     opacity: 1,
     objectId: 'ornament',
     selectable: false
   });
   this.canvas.add(this.imageOrnament);
   this.imageBand = new fabric.Image(null, {
     left: 90,
     top: 90,
     angle: 0,
     opacity: 1,
     objectId: 'band',
     selectable: false
   });
   this.canvas.add(this.imageBand);

   this.textInsert = new fabric.IText( '' , {
     left: 200,
     top: 222,
     fontSize:16,
     textAlign: 'center',
     fill: 'white',
     selectable: false,
     originX: 'center',
     objectId: 'text'
   });
   this.canvas.add(this.textInsert);

   window.test = this.canvas;

 },

 setBG: function(color){
  var canvas = this.canvas;
  canvas.setBackgroundColor(color, canvas.renderAll.bind(canvas));
 },

 setShield: function(type, image){
  var canvas = this.canvas;
  switch (type) {
    case "Ornament":
      var imgObject = this.imageOrnament;
        this.validate('ornament', 1);
      break;
    case "Shield":
      var imgObject = this.imageShield;
        this.validate('shield', 1);
      break;
    case "Band":
      var imgObject = this.imageBand;
        this.validate('band', 1);
      break;

    default:

  }
  if (imgObject) {
    imgObject.setSrc(image, function(){
      canvas.renderAll()
    });
  }
 },

 setText: function(key, val){
   var canvas = this.canvas;
   switch (key) {
      case 'text':
      this.textInsert.set({text: val});
      break;
      case 'style':
      this.textInsert.set({fontFamily: val});
       break;
      case 'size':
      this.textInsert.set({fontSize: val});
      break;
     default:
     break;

   }
   canvas.renderAll();
   this.validate('text', false, val);
 },

 loadJSON: function(url){
   var canvas = this.canvas;
   $.get( url, function( data ) {

     canvas.loadFromJSON(data, function(){
       canvas.renderAll.bind(canvas);
       canvas.renderAll();
     },
     function(o, object) {
      var objectId = object.objectId;
      object.selectable= false;
      switch (objectId) {
        case "text":
          mainCanvas.textInsert=object;

          break;
        case "shield":
          mainCanvas.imageShield=object;

          break;
        case "band":
          mainCanvas.imageBand=object;

          break;
        case "ornament":
          mainCanvas.imageOrnament=object;

          break;

        default:
        break;

      }
      });
    });
    this.validate('template');
  },

  validate : function(type, state, value) {
    var items = this.items;
    switch (type) {
      case 'shield':
        items.shield=state;
        break;
      case 'ornament':
        items.ornament=state;
        break;
      case 'band':
        items.band=state;
        break;
      case 'text':
        if (value.length>0) {
          items.text=1;
        } else {
          items.text=0;
        }
        break;
      case 'template':
        items.shield=1;
        items.ornament=1;
        items.band=1;
        items.text=0;
        return;
        break;
      default:
      break;
    };

    $("#share").show();

    for (var item in items){
      console.log(item, items[item]);
      if (items[item]==0) {
        $("#share").hide();
        return;
      }
    }
  }

};


$( document ).ready(function() {
 mainCanvas.init('main-canvas');

  $('#accordion').on('shown.bs.collapse', function (item, v, c) {
    var $item = $(item.target);
    var col = $item.attr('data-item');
    switch (col) {
      case 'BG':
        $('#backbtn').attr('href', BASE_URL).attr('data-toggle', '');
        break;
      case 'Shield':
        $('#backbtn').attr('href','#collapseOne').attr('data-toggle', 'collapse');
        var img = $item.find('.item.active img').attr('src');
        mainCanvas.setShield(col, img);
        break;
      case 'Ornament':
        $('#backbtn').attr('href','#collapseTwo').attr('data-toggle', 'collapse');
        var img = $item.find('.item.active img').attr('src');
        mainCanvas.setShield(col, img);
        break;
      case 'Band':
        $('#backbtn').attr('href','#collapseThree').attr('data-toggle', 'collapse');
        var img = $item.find('.item.active img').attr('src');
        mainCanvas.setShield(col, img);
        break;
      case 'Text':
        $('#backbtn').attr('href','#collapseFour').attr('data-toggle', 'collapse');
        break;
      case 'Template':
        $('#backbtn').attr('href','#collapseFive').attr('data-toggle', 'collapse');
        break;
    }
  });

  $('#slider-shield').on('slid.bs.carousel', function (item) {
    var $item = $(item.relatedTarget);
    var img = $item.find('img').attr('src');
    mainCanvas.setShield('Shield', img);
  });

  $('#slider-ornamen').on('slid.bs.carousel', function (item) {
    var $item = $(item.relatedTarget);
    var img = $item.find('img').attr('src');
    mainCanvas.setShield('Ornament', img);
  });

  $('#slider-band').on('slid.bs.carousel', function (item) {
    var $item = $(item.relatedTarget);
    var img = $item.find('img').attr('src');
    mainCanvas.setShield('Band', img);
  });

});
