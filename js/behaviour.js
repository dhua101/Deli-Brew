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
