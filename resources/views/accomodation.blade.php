
<head>
<title>Jelajah Nusantara</title>
<!-- Bootstrap -->
<link href="{{URL::to('/')}}/post/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="{{URL::to('/')}}/post/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Kreon:300,400,700' rel='stylesheet' type='text/css'>
<link href="{{URL::to('/')}}/post/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
  <script>
    $(function() {
      var pull    = $('#pull');
        menu    = $('nav ul');
        menuHeight  = menu.height();
      $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
      });
      $(window).resize(function(){
            var w = $(window).width();
            if(w > 320 && menu.is(':hidden')) {
              menu.removeAttr('style');
            }
        });
    });
  </script>
    <link rel="stylesheet" href="{{URL::to('/')}}post/fonts/css/font-awesome.min.css">

</head>
<body>
<div class="header_bg" id="home"><!-- start header -->
<div class="container">
  <div class="row header text-center specials">
    <div class="h_logo">
      <a href="index.html"><img src="{{URL::to('/')}}/images/logo.png" alt="" class="responsive"/></a>
    </div>
    <nav class="top-nav">
      <ul class="top-nav nav_list">
        <li><a href="/">Home</a></li>
        <li><a href="/location">Location Guides</a></li>
        <li class="logo page-scroll"><a title="hexa" href="index.html"><img src="{{URL::to('/')}}/assets/images/logo.jpg" alt="" class="responsive"/></a></li>
        <li><a href="/wisata">Things to Do</a></li>
        <li><a href="/foods">Food & Drinks</a></li>
      </ul>
      <a href="#" id="pull"><img src="{{URL::to('/')}}/images/nav-icon.png" title="menu" /></a>
    </nav>
    <div class="clearfix"></div>
  </div>
</div>
</div>
<div class="blog"><!-- start main -->
  <div class="container">
    <div class="main row">
      <div class="col-md-8 blog_left">
        <h2 class="style">Hotels & Villas</h2>
        <div class="blog_main">
          <a href="single-page.html"><img src="{{URL::to('/')}}/assets/images/htlbali.jpg" alt="" class="blog_img img-responsive"/></a>
          <h4><a href="single-page.html">Where to Stay in Bali</a></h4>
            <div class="blog_list pull-left">
                <ul class="list-unstyled">
                <li><i class="fa fa-calendar-o"></i><span>November 3, 2017</span></li>
                <li><a href="#"><i class="fa fa-comment"></i><span>Comments</span></a></li>
                  <li><i class="fa fa-user"></i><span>Admin</span></li>
                  <li><a href="#"><i class="fa fa-eye"></i><span>124 views</span></a></li>
                </ul>
            </div>
          <div class="b_left pull-right">
            <a href=""><i class="fa fa-heart"></i><span> 28</span></a>
          </div>
          <div class="clearfix"></div>
          <p class="para">Serenity Eco Guesthouse (doubles from £26 B&B), is 150 metres from the beach in Canggu, with simple rooms, pool and yoga studio. In Ubud, Taman Indrakila (doubles from £30 B&B) has pretty bungalows on a dramatic jungled gorge, and a cliffside pool. Teras Bali (doubles from £32 B&B, terasbalisidemen.com) sits amid rice fields near Sidemen with a striking swimming pool. Arjuna Homestay (doubles from £21 B&B) in Pemuteran makes a great base for diving the coral walls off Menjangan island, and has a pool.</p>
          <div class="read_more btm">
            <a href="single-page.html">view more</a>
          </div>
        </div>
        <div class="blog_main">
          <a href="single-page.html"><img src="{{URL::to('/')}}/assets/images/htllombok.jpg" alt="" class="blog_img img-responsive"/></a>
          <h4><a href="single-page.html">Where to Stay in Lombok</a></h4>
            <div class="blog_list pull-left">
                <ul class="list-unstyled">
                <li><i class="fa fa-calendar-o"></i><span>November 3, 2017</span></li>
                <li><a href="#"><i class="fa fa-comment"></i><span>Comments</span></a></li>
                  <li><i class="fa fa-user"></i><span>Admin</span></li>
                  <li><a href="#"><i class="fa fa-eye"></i><span>124 views</span></a></li>
                </ul>
            </div>
          <div class="b_left pull-right">
            <a href=""><i class="fa fa-heart"></i><span>357</span></a>
          </div>
          <div class="clearfix"></div>
          <p class="para">There is budget accommodation in Lombok and the Gilis, but none of it is very special – better to splash out a little more for somewhere memorable. In Selong Belanak, west of Kuta on Lombok’s south coast, Sempiak Villas (from £80 a night, sempiakvillas.com) has six individually designed self-catering bungalows above a sweeping, white sand beach. In Senaru in the Rinjani foothills, Rinjani Lodge (doubles from £50 B&B, rinjanilodge.com), offers stunning views, infinity pools and hot-spring tubs. For basic beachfront chic, Madak Belo (bungalow from £26 room only, dorm beds from £13, madak-belo.com) is at Madak Belo Beach on Gili Gede, the largest of the Southern Gilis. It’s worth paying a premium for a quiet location on Gili T: Wilson’s Retreat (classy suite with outdoor bathroom from £80) is on a peaceful north coast beachfront.</p>
          <div class="read_more btm">
            <a href="single-page.html">view more</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 blog_right">
       
        <!-- start social_network_likes -->
          <div class="social_network_likes">
                   <ul class="list-unstyled">
                    <li><a href="#" class="tweets"><div class="followers"><p><span>2k</span>Followers</p></div><div class="social_network"><i class="twitter-icon"> </i> </div></a></li>
                    <li><a href="#" class="facebook-followers"><div class="followers"><p><span>5k</span>Followers</p></div><div class="social_network"><i class="facebook-icon"> </i> </div></a></li>
                    <li><a href="#" class="email"><div class="followers"><p><span>7.5k</span>members</p></div><div class="social_network"><i class="email-icon"> </i></div> </a></li>
                    <li><a href="#" class="dribble"><div class="followers"><p><span>10k</span>Followers</p></div><div class="social_network"><i class="dribble-icon"> </i></div></a></li>
                    <div class="clear"> </div>
                </ul>
                </div>
        <div class="news_letter">
          <h4>news letter</h4>
            <form>
              <span><input type="text" placeholder="Your email address"></span>
              <span  class="pull-right fa-btn btn-1 btn-1e"><input type="submit" value="subscribe"></span>
            </form>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div><!-- end main -->
<div class="footer_bg" id="contact"><!-- start footer -->
<div class="container">
  <div class="row footer">
    <div class="col-md-8 contact_left">
      <h3>get in touch</h3>
      <p>In order to get in touch use the contact form below:</h4>
      <form method="post" action="contact-post.html">
        <input type="text" value="Name (Required)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
        <input type="text" value="Email (Required)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
        <input type="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
        <textarea onfocus="if(this.value == 'Your Message here....') this.value='';" onblur="if(this.value == '') this.value='Your Message here....;" >Your Message here....</textarea>
        <span class="pull-right"><input type="submit" value="submit us"></span>
      </form>
    </div>
    <div class="col-md-4  contact_right">
      <p><span>Lorem Ipsum is simply dummy text: </span> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
      <ul class="list-unstyled address">
        <li><i class="fa fa-map-marker"></i><span>500 Lorem Ipsum Dolor Sit,</span></li>
        <li><i class="fa fa-phone"></i><span>(00) 222 666 444</span></li>
        <li><i class="fa fa-envelope"></i><a href="mailto:info@mycompany.com">info(at)mycompany.com</a></li>
      </ul>
    </div>    
  </div>
</div>
</div>
<div class="footer1_bg"><!-- start footer1 -->
  <div class="container">
    <div class="row  footer">
      <div class="copy text-center">
      <p>© 2017 Jelajah Nusantara. All Rights Reserved | Design by <a href="" target="=_blank"> Jelajah Nusantara Team</a></p>
        <a href="#home" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"> </span></a>
      </div>
    </div>
    <script type="text/javascript">
        $(function() {
          $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
          });
        });
    </script>
    <!---- start-smoth-scrolling---->   
  </div>
</div>
</body>