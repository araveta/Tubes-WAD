<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RentGrapher || Group 1 </title>
    <!-- =============== Bootstrap Core CSS =============== -->
    <link rel="stylesheet" href="/lp/assets/css/bootstrap.min.css" type="text/css">
   <!-- Font Awesome icons (free version)-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- =============== Plugin CSS =============== -->
    <link rel="stylesheet" href="/lp/assets/css/animate.min.css" type="text/css">
    <!-- =============== Custom CSS =============== -->
    <link rel="stylesheet" href="/lp/assets/css/style.css" type="text/css">
    <!-- =============== Owl Carousel Assets =============== -->
    <link href="/lp/assets/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="/lp/assets/owl-carousel/owl.theme.css" rel="stylesheet">
	 <link rel="stylesheet" href="/lp/assets/css/isotope-docs.css" media="screen">
	  <link rel="stylesheet" href="/lp/assets/css/baguetteBox.css">
</head>

<body>
    <!-- =============== Preloader =============== -->
    <div id="preloader">
        <div id="loading">
		<img width="256" height="32" src="/lp/assets/img/loading-cylon-red.svg">	
        </div>
    </div>
    <!-- =============== nav =============== -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
			
            <div class="container-fluid"></div>
			
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<a style="padding: 0rem;" class="navbar-brand" href="index.html"><img src="/lp/assets/img/icon.png" alt="Logo Rentgrapher" style="width:120px" height="120px">
					</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="navbarResponsive">
					
                    <ul class="nav navbar-nav navbar-right ms-auto py-4 py-lg-0">
                        <li>
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#Services">Services</a>
                        </li>
						<li>
                            <a class="page-scroll" href="#team">Our Team</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#Gallery">Gallery</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
						<li>
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                <li class="nav-item">
                                <a class="nav-link" href="{{ route('area') }}">Member Area</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                                
                                
                                @else
                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>

                                    @if (Route::has('register'))
                                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                                                @endif
                                @endauth
                                            </ul>
                             
                            </div>
                        @endif
                        </li>
                    </ul>
                </div>
                <!-- =============== navbar-collapse =============== -->

            </div>
        </div>
        <!-- =============== container-fluid =============== -->
    </nav>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
    <!-- =============== header =============== -->
    <header id="home" class="header">
		<!-- =============== container =============== -->
        <div class="container">
            <div class="header-content row">
				

				<div id="owl-demo" class="owl-carousel header1">
				  <div>
				  <div class="col-xs-12 col-sm-6 col-md-6 header-text">
                    <h2 class="wow bounceIn animated" data-wow-delay=".40s">Rent<span>Grapher</span></h2>
                    <h3 class="wow bounceIn animated" data-wow-delay=".50s">A place where your imagination come true</h3>
					<i><p class="wow bounceIn animated" data-wow-delay=".60s">Sudah lebih dari 10.000 Fotographer, Videographer, dan Editor sudah bergabung bersama kami.</p></i>
                    <p>
                        <div class="btn btn-primary btn-ornge wow bounceIn animated" data-wow-delay="1s">
							<a class="hbtn page-scroll" href="/memberview/layanan"> <span>Book Now</span></a>
                        </div>
                    </p>
					</div>               
				</div>           
				</div>
				</div>				 
				</div>


                
        </div>
		<!-- =============== container end =============== -->
    </header>
    <!-- =============== About =============== -->
    <section id="about" class="">
		<!-- =============== container =============== -->
        <div class="container">            
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInDown animated" data-wow-delay=".5s">
                   <h2>About Us</h2>
				   <p>Lorem ipsum dolor sit amet, netus pellentesque mauris, non quis adipiscing aliquam tortor nulla, ut dolor, mauris sem ultricies sed tellus ut aliquam. Donec vel sollicitudin orci mi ut, neque aliquam vel vel nostrum enim tristique, magna rhoncus. Dapibus purus eget cubilia eget, in ut in mi dui ipsum odio, nullam vestibulum aliquam fusce, dignissim venenatis ultricies sed mattis non, metus a libero et. Imperdiet aliquet. Vivamus malesuada, ultrices convallis, diam vitae pellentesque volutpat ante vitae amet, ac leo, arcu duis venenatis in auctor sit suscipit. </p>
				   <p>Integer sapien sed mauris nec, volutpat risus leo placerat elit at aliquet, a egestas ultrices, vitae non amet lacus etiam, malesuada pellentesque scelerisque. Neque fermentum parturient ante pede, a dui ut ultricies luctus non nobis, amet nibh et. Diam nunc in eleifend commodo ante, amet quam integer dolor sit volutpat faucibus, sed sem, et amet sed, vestibulum mollit et a ac nullam. Eu nunc voluptas risus dui et pellentesque.</p>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInRight animated" data-wow-delay=".5s">
                     <img src="/lp/assets/img/about-img.jpg"/>               
                  </div>     
            </div>
        </div>   
		<!-- =============== container end =============== -->		
    </section>
	<section id="team" class="">
		<!-- =============== container =============== -->
        <div class="container">            
            <div class="row">
				<div class="title">
				<h2>Our Team</h2>
				<p>Meet some of our lovely, passionate, positive people.</p>
				</div>
                <div class="col-xs-6 col-sm-6 col-md-3 wow fadeInDown animated" data-wow-delay=".1s">
                   <div class="timg col-5 text-center"><img src="/lp/assets/img/team-img1.jpg" height = "250px" class= "img-rectangle img-fluid
					"/></div>
				    <div class="t-box">
				   <h3>Ahmad Dhafin Faza</h3>
				   <span>Project Manager & BackEnd Developer</span>
				   <ul class="social-links">
						<li><a class="wow fadeInUp animated" href="index.html#"><i class="fa fa-facebook"></i></a></li>
						<li><a data-wow-delay=".1s" class="wow fadeInUp animated" href="index.html#"><i class="fa fa-twitter"></i></a></li>
						<li><a data-wow-delay=".2s" class="wow fadeInUp animated" href="index.html#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				   </div>
                  </div>
				  <div class="col-xs-6 col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay=".2s">
                    <div class="timg col-5 text-center">
						<img src="/lp/assets/img/team-img2.jpg" class= "img-rectangle img-fluid" height = "250px"></div>
				   <div class="t-box">
				   <h3>Ksatria Vege Al Gilbran</h3>
				   <span>Website & ui designer</span>
				   <ul class="social-links">
						<li><a class="wow fadeInUp animated" href="index.html#"><i class="fa fa-facebook"></i></a></li>
						<li><a data-wow-delay=".1s" class="wow fadeInUp animated" href="index.html#"><i class="fa fa-twitter"></i></a></li>
						<li><a data-wow-delay=".2s" class="wow fadeInUp animated" href="index.html#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				   </div>				   
                  </div>
				  <div class="col-xs-6 col-sm-6 col-md-3 wow fadeInDown animated" data-wow-delay=".3s">
                    <div class="timg"><img src="/lp/assets/img/team-img3.jpg" height = "250px"/></div>
				   <div class="t-box">
				   <h3>Nazara Agusta Veta Putra</h3>
				   <span>Website & ui designer</span>
				   <ul class="social-links">
						<li><a class="wow fadeInUp animated" href="index.html#"><i class="fa fa-facebook"></i></a></li>
						<li><a data-wow-delay=".1s" class="wow fadeInUp animated" href="index.html#"><i class="far fa-twitter"></i></a></li>
						<li><a data-wow-delay=".2s" class="wow fadeInUp animated" href="index.html#"><i class="far fa-google-plus"></i></a></li>
					</ul>
				   </div>
                  </div> 
				  <div class="col-xs-6 col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay=".4s">
                    <div class="timg"><img src="/lp/assets/img/team-img4.jpg" height = "250px" /></div>
				    <div class="t-box">
				   <h3>Rainy Happy Shahisa</h3>
				   <span>Website & ui designer</span>
				   <ul class="social-links">
						<li><a class="wow fadeInUp animated" href="index.html#"><i class="fa fa-facebook"></i></a></li>
						<li><a data-wow-delay=".1s" class="wow fadeInUp animated" href="index.html#"><i class="fas fa-twitter"></i></a></li>
						<li><a data-wow-delay=".2s" class="wow fadeInUp animated" href="index.html#"><i class="fas fa-google-plus"></i></a></li>
					</ul>
				   </div>
                  </div>                 
            </div>
        </div>   
		<!-- =============== container end =============== -->		
    </section>	
	<!-- =============== Services =============== -->
    <section id="Services" class="">
		<!-- =============== container =============== -->
        <div class="container">            
            <div class="row">
			 <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInLeft animated" data-wow-delay=".5s">
                     <img src="assets/img/services-img.jpg" class="img-left"/>               
                  </div>     
                <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInRight animated" data-wow-delay=".5s">
                   <h2>Services</h2>
				   <p>Lorem ipsum dolor sit amet, netus pellentesque mauris, non quis adipiscing aliquam tortor nulla, ut dolor, mauris sem ultricies sed tellus ut aliquam. Donec vel sollicitudin orci mi ut, neque aliquam vel vel nostrum enim tristique, magna rhoncus. Dapibus purus eget cubilia eget, in ut in mi dui ipsum odio, nullam vestibulum aliquam fusce, dignissim venenatis ultricies sed mattis non, metus a libero et. Imperdiet aliquet. Vivamus malesuada, ultrices convallis, diam vitae pellentesque volutpat ante vitae amet, ac leo, arcu duis venenatis in auctor sit suscipit. </p>
				   <p>Integer sapien sed mauris nec, volutpat risus leo placerat elit at aliquet, a egestas ultrices, vitae non amet lacus etiam, malesuada pellentesque scelerisque. Neque fermentum parturient ante pede, a dui ut ultricies luctus non nobis, amet nibh et. Diam nunc in eleifend commodo ante, amet quam integer dolor sit volutpat faucibus, sed sem, et amet sed, vestibulum mollit et a ac nullam. Eu nunc voluptas risus dui et pellentesque.</p>
                  </div>
                 
            </div>
        </div>   
		<!-- =============== container end =============== -->		
    </section>	
	<!-- =============== for box =============== -->		
	<section class="for-box">
	 <div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4 wow rotateInDownLeft animated" data-wow-delay=".1s">
				<div class="for-box-crecl">
					<i class="fa fa-camera-retro"></i>
				</div>
				<div class="clr1">				
				<h2>
					PHOTO<br/>GRAPHER
				</h2>
				</div>
				<div class="wbox">
					<strong>sorem ipsum </strong>
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum ac vehicula leo dulam 
nullam rhoncus tortor at dignissim vehicula.</p>
					<a href="/memberview/layanan" class="btn btn-primary">ORDER</a>
				</div>
				
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 wow rotateInDownLeft animated" data-wow-delay=".2s">
				<div class="for-box-crecl">
					<i class="fa fa-file-video"></i>
				</div>
				<div class="clr2">				
				<h2>
					VIDEO<br/>GRAPHER
				</h2>
				</div>
				<div class="wbox">
					<strong>sorem ipsum </strong>
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum ac vehicula leo dulam 
nullam rhoncus tortor at dignissim vehicula.</p>
					<a href="/memberview/layanan" class="btn btn-primary">ORDER</a>
				</div>
				
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 wow rotateInDownRight animated" data-wow-delay=".3s">
				<div class="for-box-crecl">
					<i class="fa fa-film"></i>
				</div>
				<div class="clr3">				
				<h2>
					EDITOR<br/>EXPERT
				</h2>	
				</div>
				<div class="wbox">
					<strong>sorem ipsum </strong>
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum ac vehicula leo dulam 
nullam rhoncus tortor at dignissim vehicula.</p>
					<a href="/memberview/layanan" class="btn btn-primary">ORDER</a>
				</div>
	</section>
	<!-- =============== Counter =============== -->
    	
    
<!-- =============== Gallery =============== -->
    <section id="Gallery" class="wow flipInX animated" data-wow-delay=".5s">
	<div class="title">
				<h2>Gallery</h2>				
				<p>Check out our most picture taken</p>
				</div>
			
	<div class="big-demo go-wide" data-js-module="filtering-demo">
	<div class="container">            
            <div class="row">
  <div class="filter-button-group button-group js-radio-button-group">
    <button class="button is-checked" data-filter="*">Fotographer</button>
    <button class="button" data-filter=".webdesign">Videographer</button>
    <button class="button" data-filter=".ecommerce">Editor</button>   
  </div>
</div>
</div>


  <div class="grid baguetteBoxThree gallery">
      <div class="element-item transition webdesign " data-category="post-transition">
	  <a href="/lp/assets/img/gallery/emp-1.jpg">	 
	  <img src="/lp/assets/img/gallery/emp-1.jpg"/>      
		<div class="hover-img"> 
		<h2>Productive Day</h2>
		<i class="fa fa-camera camera"></i>
		</div>
	  </a>
      </div>      
      <div class="element-item post-transition ecommerce " data-category="post-transition">
	  <a href="/lp/assets/img/gallery/emp-2.jpg">	 
        <img src="/lp/assets/img/gallery/emp-2.jpg"/>    
		<div class="hover-img"> 
		<h2>Working</h2>
		<i class="fa fa-camera camera"></i>
		</div>		
	  </a>
      </div>
      <div class="element-item post-transition webdesign " data-category="post-transition">
	  <a href="/lp/assets/img/gallery/emp-3.jpg">	 
		<img src="/lp/assets/img/gallery/emp-3.jpg"/>       
		<div class="hover-img"> 
		<h2>Silhouette Perspective</h2>
		<i class="fa fa-camera camera"></i>
		</div>		
		</a>
      </div>
	 <div class="element-item transition ecommerce " data-category="post-transition">
	   <a href="/lp/assets/img/gallery/emp-4.jpg">	 
	    <img src="/lp/assets/img/gallery/emp-4.jpg"/>       
		<div class="hover-img"> 
		<h2>Comfort Spot</h2>
		<i class="fa fa-camera camera"></i>
		</div>	
		</a>		
      </div>      
      <div class="element-item post-transition logo " data-category="post-transition">
         <a href="/lp/assets/img/gallery/emp-5.jpg">	 
	    <img src="/lp/assets/img/gallery/emp-5.jpg"/>       
		<div class="hover-img"> 
		<h2>Logo</h2>
		<i class="fa fa-camera camera"></i>
		</div>	
		</a>
      </div>
      <div class="element-item post-transition cms " data-category="post-transition">
		 <a href="/lp/assets/img/gallery/emp-6.jpg">	 
	    <img src="/lp/assets/img/gallery/emp-6.jpg"/>       
		<div class="hover-img"> 
		<h2>CMS</h2>
		<i class="fa fa-camera camera"></i>
		</div>	
		</a>
      </div>
	  <div class="element-item post-transition logo " data-category="post-transition">
         <a href="/lp/assets/img/gallery/emp-7.jpg">	 
	    <img src="/lp/assets/img/gallery/emp-7.jpg"/>       
		<div class="hover-img"> 
		<h2>Simplic</h2>
		<i class="fa fa-camera camera"></i>
		</div>	
		</a>
      </div>
	  <div class="element-item transition cms " data-category="post-transition">
	   <a href="/lp/assets/img/gallery/emp-8.jpg">	 
	    <img src="/lp/assets/img/gallery/emp-8.jpg"/>       
		<div class="hover-img"> 
		<h2>Third Perspective</h2>
		<i class="fa fa-camera camera"></i>
		</div>	
		</a>
      </div>      
      <div class="element-item post-transition ecommerce " data-category="post-transition">
         <a href="/lp/assets/img/gallery/emp-9.jpg">	 
	    <img src="/lp/assets/img/gallery/emp-9.jpg"/>       
		<div class="hover-img"> 
		<h2>Beauty Office</h2>
		<i class="fa fa-camera camera"></i>
		</div>	
		</a>
      </div>
      <div class="element-item post-transition webdesign " data-category="post-transition">
		 <a href="/lp/assets/img/gallery/emp-10.jpg">	 
	    <img src="/lp/assets/img/gallery/emp-10.jpg"/>       
		<div class="hover-img"> 
		<h2>Perfect Angle</h2>
		<i class="fa fa-camera camera"></i>
		</div>	
		</a>          
      </div>
	  <div class="element-item post-transition logo " data-category="post-transition">
         <a href="/lp/assets/img/gallery/emp-11.jpg">	 
	    <img src="/lp/assets/img/gallery/emp-11.jpg"/>       
		<div class="hover-img"> 
		<h2>Analyst Footage</h2>
		<i class="fa fa-camera camera"></i>
		</div>	
		</a>
      </div>
	  <div class="element-item transition cms " data-category="post-transition">
	   <a href="/lp/assets/img/gallery/emp-12.jpg">	 
	    <img src="/lp/assets/img/gallery/emp-12.jpg"/>       
		<div class="hover-img"> 
		<h2>POV</h2>
		<i class="fa fa-camera camera"></i>
		</div>	
		</a>
      </div>      
  </div>

 
</div>


</section>
		
	<section id="contact">
	<!-- =============== container =============== -->
		<div class="container">
			    <div class="row">
                <div class="title">
				<h2>Contact</h2>
				<p>Meet some of our lovely, passionate, positive people.</p>
				</div>
			</div>

			<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-12 wow bounceIn animated" data-wow-delay=".1s">

					<form action="#" method="post">
						<div class="ajax-hidden">
							<div class="col-xs-12 col-sm-6 col-md-6 form-group wow fadeInUp animated">
								<label for="c_name" class="sr-only">Name</label>
								<input type="text" placeholder="Name" name="name" class="form-control" id="name" required="">
							</div>

							<div data-wow-delay=".1s" class="col-xs-12 col-sm-6 col-md-6 form-group wow fadeInUp animated">
								<label for="c_email" class="sr-only">Email</label>
								<input type="email" placeholder="E-mail" name="email" class="form-control" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" placeholder="e.g. info@envato.com" required="">
							</div>

							<div data-wow-delay=".2s" class="col-xs-12 col-sm-12 col-md-12 form-group wow fadeInUp animated">
								<textarea placeholder="Message" rows="7" name="description" id="description" class="form-control" required=""></textarea>
							</div>

							<button data-wow-delay=".3s" class="btn btn-sm btn-block wow fadeInUp animated" type="submit">Send Message</button>
						</div>
						<div class="ajax-response"></div>
					</form>

				</div>              
			</div>
		</div><!-- =============== container end =============== -->
	</section>
    <!-- Footer -->
    <footer id="footer">
	<!-- =============== container =============== -->
    <div class="container">
			    <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">

					<ul class="social-links">
						<li><a class="wow fadeInUp animated" href="index.html#" style="visibility: visible; animation-name: fadeInUp;"><i class="fa fa-facebook"></i></a></li>
						<li><a data-wow-delay=".1s" class="wow fadeInUp animated" href="index.html#" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"><i class="fa fa-twitter"></i></a></li>
						<li><a data-wow-delay=".2s" class="wow fadeInUp animated" href="index.html#" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"><i class="fa fa-google-plus"></i></a></li>
						<li><a data-wow-delay=".4s" class="wow fadeInUp animated" href="index.html#" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"><i class="fa fa-pinterest"></i></a></li>
						<li><a data-wow-delay=".5s" class="wow fadeInUp animated" href="index.html#" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"><i class="fa fa-envelope"></i></a></li>
					</ul>

                    <p class="copyright">
                        &copy; 2016 Be. Created By <a href="http://templatestock.co">Template Stock</a>
					</p>

				</div>
				<div data-wow-delay=".6s" class="col-xs-12 col-sm-6 col-md-6 wow bounceIn  animated" style="visibility: visible; animation-delay: 0.6s; animation-name: bounceIn;">

					  <section class="widget widget_text" id="text-15">
                         <h3 class="widget-title">California, United States</h3> <div class="textwidget">786, Firs Avenue, The Mall,<br>
                        <p>Tel: 01 234-56786<br>
                        Mobile: 01 234-56786<br>
                        E-mail: <a href="#">info@Be.com</a></p>
                        <a href="#">Get directions on the map</a> →</div>
                    </section>

				</div>
			</div>
    </div><!-- =============== container end =============== -->
	</footer>    
	<!-- =============== jQuery =============== -->
    <script src="/lp/assets/js/jquery.js"></script>
	 <script src="/lp/assets/js/isotope-docs.min.js"></script>
    <!-- =============== Bootstrap Core JavaScript =============== -->
    <script src="/lp/assets/js/bootstrap.min.js"></script>
    <!-- =============== Plugin JavaScript =============== -->
    <script src="/lp/assets/js/jquery.easing.min.js"></script>
    <script src="/lp/assets/js/jquery.fittext.js"></script>
    <script src="/lp/assets/js/wow.min.js"></script> 
	<!-- =============== owl carousel =============== -->
    <script src="/lp/assets/owl-carousel/owl.carousel.js"></script>  
	<!-- Isotope does NOT require jQuery. But it does make things easier -->

<script src="/lp/ssets/js/baguetteBox.js" async></script>
<script src="/lp/assets/js/plugins.js" async></script>
 
    <!-- =============== Custom Theme JavaScript =============== -->
    <script src="/lp/assets/js/creative.js">	</script> 
<script src="/lp/assets/js/jquery.nicescroll.min.js"></script>

<script>
  $(document).ready(function() {
  
	var nice = $("html").niceScroll();  // The document page (body)
	
	$("#div1").html($("#div1").html()+' '+nice.version);
    
    $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#00F",boxzoom:true}); // First scrollable DIV

    $("#boxscroll2").niceScroll("#contentscroll2",{cursorcolor:"#F00",cursoropacitymax:0.7,boxzoom:true,touchbehavior:true});  // Second scrollable DIV
    $("#boxframe").niceScroll("#boxscroll3",{cursorcolor:"#0F0",cursoropacitymax:0.7,boxzoom:true,touchbehavior:true});  // This is an IFrame (iPad compatible)
	
    $("#boxscroll4").niceScroll("#boxscroll4 .wrapper",{boxzoom:true});  // hw acceleration enabled when using wrapper
    
  });
</script>
<script>
window.onload = function() {
    if(typeof oldIE === 'undefined' && Object.keys)
        hljs.initHighlighting();

    baguetteBox.run('.baguetteBoxOne');
    baguetteBox.run('.baguetteBoxTwo');
    baguetteBox.run('.baguetteBoxThree', {
        animation: 'fadeIn'
    });
    baguetteBox.run('.baguetteBoxFour', {
        buttons: false
    });
    baguetteBox.run('.baguetteBoxFive', {
        captions: function(element) {
            return element.getElementsByTagName('img')[0].alt;
        }
    });
};
</script>
</body>
</html>

