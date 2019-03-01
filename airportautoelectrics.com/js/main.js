$(document).ready(function(){
  //nav burger menu
  $(".menu-icon").click(function(){
    $(".menu-icon").toggleClass("active")
  })

  $(".menu-icon").click(function(){
    $(".sidebar").toggleClass("active")
  })

  $(".autohide").click(function(){
     //document.getElementById("navElement").style.left="-100%";
     $(".sidebar").toggleClass("active")
     $(".menu-icon").toggleClass("active")
   })


  // //Google map
  function initialize(){
    var mapCanvas = document.getElementById('map');
    var mapOptions = {
               center : new google.maps.LatLng(53.416946, -6.238072),
               zoom: 17,
               mapTypeId: google.maps.MapTypeId.ROADMAP
     }

     var map = new google.maps.Map(mapCanvas, mapOptions)

    var marker = new google.maps.Marker({
    position: new google.maps.LatLng(53.416946, -6.238072),
    map: map,  animation: google.maps.Animation.BOUNCE,
    icon:'img/minion.png',
    //icon:'img/pinkball.png',
    title: 'Airport Auto Electrics'  });
  }
  google.maps.event.addDomListener(window, 'load', initialize);






})//end of the ready function

//FlexSlider
$(window).load(function() {
$('.flexslider').flexslider({
animation:"slide",
controlNav:false,
});
});

//Scroll function
$(document).ready(function($) {

	$(".scroll").click(function(event){
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);
	});


  //back to top button function
 $('body').prepend('<a href="#" class="back-to-top scroll"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>');

  $(window).scroll(function(){
    if($(window).scrollTop() > 400){
      $('a.back-to-top').fadeIn("fast");
    }else{
      $('a.back-to-top').fadeOut("fast");
    }
  })

  $('a.back-to-top').click(function(){
    $('html,body').animate({
      scrollTop: 0
    }, 1000);
    return false;
  })


});
