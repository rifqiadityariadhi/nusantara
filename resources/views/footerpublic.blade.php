<!-- footer -->
 <div class=" agileits_w3layouts-copyright">
	 <div class="container">
	<div class="col-sm-6  col-xs-6 w3_agile">
			<p>© 2017 Jelajah Nusantara. All Rights Reserved | Design by <a href="" target="=_blank"> Jelajah Nusantara Team</a></p>
	</div>
	<div class="col-sm-6 col-xs-6 links">
		<ul class="footer_menu">
			<li>Follow us:</li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
		</ul>
	</div>
	<div class="clearfix"></div>
 </div>
</div>
<!-- //footer -->
<!-- //footer -->
<!-- testimonial-plugin -->
		<script src="{{URL::to('/')}}/assets/js/mislider.js" type="text/javascript"></script>
		<script type="text/javascript">
			jQuery(function ($) {
				var slider = $('.mis-stage').miSlider({
					//  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
					stageHeight: 320,
					//  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
					slidesOnStage: false,
					//  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
					slidePosition: 'center',
					//  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
					slideStart: 'mid',
					//  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
					slideScaling: 150,
					//  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
					offsetV: -5,
					//  Center slide contents vertically - Boolean. Default: false
					centerV: true,
					//  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
					navButtonsOpacity: 1,
				});
			});
		</script>
<!-- //testimonial-plugin -->
	<script src="{{URL::to('/')}}/assets/js/lightbox-plus-jquery.min.js"> </script>
	<script type="text/javascript" src="{{URL::to('/')}}/assets/js/move-top.js"></script>
	<script type="text/javascript" src="{{URL::to('/')}}/assets/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- start-smooth-scrolling -->
	<script src="{{URL::to('/')}}/assets/js/SmoothScroll.min.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
	<!-- //here ends scrolling icon -->
	<script type="text/javascript" src="{{URL::to('/')}}/assets/js/numscroller-1.0.js"></script>
	<script src="{{URL::to('/')}}/assets/js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: false,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });

						});
			</script>
</body>
</html>
