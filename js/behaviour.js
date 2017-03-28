/* ======================================= *
                behaviour.js

   Javascript codes for behaviour of the
   website in this section.
 * ======================================= */

 /* Side Navigation Opening */
 function openNav() {
   /* Side Navigation overlay */
   //document.getElementById("main-side-nav").style.width = "250px";

   /* Side Navigation Push Content - To the Right */
   //document.getElementById("main-side-nav").style.width = "250px";
   //document.getElementById("content").style.marginLeft = "250px";

   /* Side Navigation Push Content - To the Left */
   //document.getElementById("main-side-nav").style.width = "250px";
   //document.getElementById("content").style.marginRight = "250px";

   /* Side Navigation Push Content w/ Opacity - To the Right */
   document.getElementById("main-side-nav").style.width = "250px";
   document.getElementById("content").style.marginLeft = "250px";
   document.body.style.backgroundColor = "rgba(0,0,0,0.4)";

   /* Side Navigation Push Content w/ Opacity - To the left */
   //document.getElementById("main-side-nav").style.width = "250px";
   //document.getElementById("content").style.marginRight = "250px";
   //document.body.style.backgroundColor = "rgba(0,0,0,0.4)";

   /* Side Navigation Full Width */
   //document.getElementById("main-side-nav").style.width = "100%";

   /* Side Navigation without Animation */
   //document.getElementById("main-side-nav").style.display = "block";
}

 /* Side Navigation Closing */
function closeNav() {
  /* Side Navigation overlay */
  //document.getElementById("main-side-nav").style.width = "0px";

  /* Side Navigation Pull Content - From the Right*/
  //document.getElementById("main-side-nav").style.width = "0px";
  //document.getElementById("content").style.marginLeft = "0px";

  /* Side Navigation Pull Content - From the Left */
  //document.getElementById("main-side-nav").style.width = "0px";
  //document.getElementById("content").style.marginRight = "0px";

  /* Side Navigation Pull Content w/ Opacity - From the Right */
  document.getElementById("main-side-nav").style.width = "0px";
  document.getElementById("content").style.marginLeft = "0px";
  document.body.style.backgroundColor = "white";

  /* Side Navigation Pull Content w/ Opacity - From the Left */
  //document.getElementById("main-side-nav").style.width = "0px";
  //document.getElementById("content").style.marginRight = "0px";
  //document.body.style.backgroundColor = "white";

  /* Side Navigation Full Width */
  //document.getElementById("main-side-nav").style.width = "0px";

  /* Side Navigation without Animation */
  //document.getElementById("main-side-nav").style.display = "none";
}

/* Map */
function myMap() {
   var mapOptions = {
       center: new google.maps.LatLng(42.98339,-81.23304),
       zoom: 10,
       mapTypeId: google.maps.MapTypeId.HYBRID
   };
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}

/* Popover */
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});

/* Ratings */
$(document).ready(function(){
    //  Check Radio-box
    $(".rating input:radio").attr("checked", false);
    $('.rating input').click(function () {
        $(".rating span").removeClass('checked');
        $(this).parent().addClass('checked');
    });

    $('input:radio').change(
    function(){
        var userRating = this.value;
        alert(userRating);
    });
});

/* Sliderr and Animation */
var ul;
var li_items;
var li_number;
var image_number = 0;
var slider_width = 0;
var image_width;
var current = 0;
function init(){
    ul = document.getElementById('image_slider');
    li_items = ul.children;
    li_number = li_items.length;
    for (i = 0; i < li_number; i++){
        // nodeType == 1 means the node is an element.
        // in this way it's a cross-browser way.
        //if (li_items[i].nodeType == 1){
            //clietWidth and width???
            image_width = li_items[i].childNodes[0].clientWidth;
            slider_width += image_width;
            image_number++;
    }

    ul.style.width = parseInt(slider_width) + 'px';
    slider(ul);
}

function slider(){
        animate({
            delay:25,
            duration: 4000,
            delta:function(p){return Math.max(0, -1 + 2 * p)},
            step:function(delta){
                    ul.style.left = '-' + parseInt(current * image_width + delta * image_width) + 'px';
                },
            callback:function(){
                current++;
                if(current < li_number-1){
                    slider();
                }
                else{
                    var left = (li_number - 1) * image_width;
                    setTimeout(function(){goBack(left)},2000);
                    setTimeout(slider, 4000);
                }
            }
        });
}
function goBack(left_limits){
    current = 0;
    setInterval(function(){
        if(left_limits >= 0){
            ul.style.left = '-' + parseInt(left_limits) + 'px';
            left_limits -= image_width / 10;
        }
    }, 17);
}
function animate(opts){
    var start = new Date;
    var id = setInterval(function(){
        var timePassed = new Date - start;
        var progress = timePassed / opts.duration
        if(progress > 1){
            progress = 1;
        }
        var delta = opts.delta(progress);
        opts.step(delta);
        if (progress == 1){
            clearInterval(id);
            opts.callback();
        }
    }, opts.dalay || 17);
}
window.onload = init;
