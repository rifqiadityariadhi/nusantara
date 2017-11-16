@include('headerpublic')
<div class="banner-top">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">
							<div class="container">
								<div class="agileits-banner-info">
									<h4>explore</h4>
									<!--<p>a delightful trip awaits!</p>-->
									<a class="hvr-rectangle-out" href="#" data-toggle="modal" data-target="#myModal"> More About Us</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
									<h4>dream</h4>
									<!--<p>Book Flight Plus Hotel Combo & Save More !</p>-->

									<a class="hvr-rectangle-out" href="#" data-toggle="modal" data-target="#myModal"> More About Us</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
									<h4>discover</h4>
									<!--<p>up to 30% instant discount on hotels</p>-->
									<a class="hvr-rectangle-out" href="#" data-toggle="modal" data-target="#myModal"> More About Us</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top3">
							<div class="container">
								<div class="agileits-banner-info">
										<h4>wander</h4>
									<!--<p>Get 25% instant discount on Train Tickets.</p>-->
									<a class="hvr-rectangle-out" href="#" data-toggle="modal" data-target="#myModal"> More About Us</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top4">
							<div class="container">
								<div class="agileits-banner-info">
									<h4>travel</h4>
									<!--<p>a new journey deserves a memorable start</p>-->
									<a class="hvr-rectangle-out" href="#" data-toggle="modal" data-target="#myModal"> More About Us</a>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!--banner Slider starts Here-->
		</div>
	</div>
	<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Jelajah Nusantara
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
					<div class="modal-body">
						<img src="{{URL::to('/')}}/assets/images/1.jpg" alt=" " class="img-responsive" />
						<p><b>The world's most comprehensive guide to Indonesia.</b></p>
						<p>We're proud to have the most comprehensive and detailed website for Indonesia available anywhere in the world.</p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up -->

	<!-- about
	<div class="w3ls-about agile-section" id="about">
	  <div class="container">
		  <div class="shortcode_title shortcode-title-style_1"><h3 class="title_primary">About us</h3><h4>lorempisum lorem</h4><span class="line_after_title"></span></div>
		  <div class="about_main">
			  <div class="col-md-8 col-sm-12  about_text_w3l">
				<P>Auris eget vestibulum augue. Integer sit amet tellus libero.Nam ac enim ut velit dictum congue. Integer vitae elit in risus laoreet porttitor non nec enim. Donec nec sapien odio.</p><p class="about-two">Nullam dictum, elit maximus vulputate venenatis, neque velit tincidunt mauris, ac facilisis ligula mi et neque. Vivamus ut felis sem. In eget diam lorem. Aliquam tincidunt. Aliquam venenatis  non orci egestas cursus. Phasellus venenatis blandit odio, in tincidunt ex trist.Integer sit amet tellus libero.Nam ac enim ut velit dictum congue. Integer vitae elit in risus laoreet porttitor non nec enim.
				</P>
				<ul class="w3l-about-list">
					<li><i class="fa fa-plane" aria-hidden="true"></i>diverse destinations</li>
					<li><i class="fa fa-globe" aria-hidden="true"></i>passionate travel</li>
					<li><i class="fa fa-credit-card" aria-hidden="true"></i>value for money</li>
				</ul>
			  </div>
			  <div class="col-md-4 col-sm-12 about_agileits"></div>
			  <div class="clearfix"></div>
		  </div>
	  </div>
	 </div>
	about -->
	<!-- gallery -->
	<div class="gallery agile-section" id="gallery">
		<div class="shortcode_title shortcode-title-style_1"><h3 class="title_primary"></h3><span class="line_after_title"></span></div>
		<div class="gallery-grids">
				<div class="gallery-top-grids">
					<div class="col-sm-3 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="{{URL::to('/')}}/assets/images/g1.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="{{URL::to('/')}}/assets/images/g1.jpg" alt="" />
								<div class="g-captn">
									<h4>LOCATION GUIDES</h4>
								</div>
							</a>
						</div>
					</div>
					<div class="gallery-top-grids">
					<div class="col-sm-3 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="{{URL::to('/')}}/assets/images/g5.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="{{URL::to('/')}}/assets/images/g5.jpg" alt="" />
								<div class="g-captn">
									<h4>THINGS TO DO</h4>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-3 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="{{URL::to('/')}}/assets/images/g2.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="{{URL::to('/')}}/assets/images/g2.jpg" alt="" />
								<div class="g-captn">
									<h4>HOTELS & VILLAS</h4>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-3 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="{{URL::to('/')}}/assets/images/g3.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="{{URL::to('/')}}/assets/images/g3.jpg" alt="" />
								<div class="g-captn">
								<h4>FOOD & DRINKS</h4>
								</div>
							</a>
						</div>
					</div>
					
				</div>
				<div class="clearfix"> </div>

		</div>
	</div>
	<!-- //gallery -->

@include('footerpublic')
