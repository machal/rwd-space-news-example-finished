$(document).ready(function(){

	$('.fancybox').fancybox();

  $('.head-hamburger a').click(function(event) {
     event.preventDefault();
     $('#nav').toggle();
  });

})
