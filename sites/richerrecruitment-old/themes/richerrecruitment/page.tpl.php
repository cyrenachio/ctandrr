	<head>
		<title>RR</title>
		<!--<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="css/slider.css">-->
        
        <title><?php print $head_title; ?></title>
		  <?php print $head; ?>
          <?php print $styles; ?>
          <?php print $scripts; ?>
	</head>
	<body>
		<header>
        <?php print $styles; ?>
			<div class="header-container">
				<div class="top-bar">
				</div>
				<div class="header-wrap">
                	<div class="header-inner">
					<div class="logo-area">
						<img src="images/logo-header.jpg">
					</div>
					<div class="menu-area">
						<nav>
							<ul>
								<li><a href="about.html">about</a></li>
								<li><a href="#">services</a></li>
								<li><a href="#">gallery</a></li>
								<li><a href="#">faq</a></li>
								<li><a href="#">contact us</a></li>
							</ul>
						</nav>
					</div>
                    </div>
				</div>
			</div>
		</header>
		<div class="container">
		<div class="slider-container" id="slider-container">
	<div class="slider">
		<div>
			<img src="images/banner1.jpg" alt="">
			<div style="position: absolute; width: 970px; height:130px; top: 110px; left: 260px; padding: 0px;
                    text-align: left; line-height: 42px; font-family:Tahoma; font-weight:bold; font-size: 36px;
                        color: #FFFFFF;">
                        Richer Recruitment Services hopes that the workers<br /> 
                        or helpers we bring in may help out and bring a smile<br />
                        to your esteem company, family and children.
            <div class="more-abut"><a href="#"><div class="more-about"></div></a></div> </div>
           
		</div>
		<!--<div>
			<img src="images/5.jpg" alt="">
			<div style="position: absolute; width: 970px; height:130px; top: 110px; left: 260px; padding: 0px;
                    text-align: left; line-height: 42px; font-family:Tahoma; font-weight:bold; font-size: 36px;
                        color: #FFFFFF;">
                        Richer Recruitment Services hopes that the workers<br /> 
                        or helpers we bring in may help out and bring a smile<br />
                        to your esteem company, family and children.
                         <div class="more-abut"><a href="#"><div class="more-about"></div></a></div>
            </div>
		</div>-->
		
	</div>

	<div class="switch" id="prev"><span></span></div>
	<div class="switch" id="next"><span></span></div>
 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.js"><\/script>')</script>

<script src="js/slider.js"></script>
<script>
	$("#slider-container").sliderUi({
		speed: 700,
		cssEasing: "cubic-bezier(0.285, 1.015, 0.165, 1.000)"
	});
	$("#caption-slide").sliderUi({
		caption: true
	});
</script>
			<div class="services">
				<div class="services-wrap">
                
					<div class="service">
			 		  <div class="service-name">
							construction
					  </div>
					   <div class="service-img">
							<img src="images/service-1.png" />
					   </div>
					   <div class="service-text">
							<div class="service-text-normal">
								Lorem ipsm dolor sit amet,
								consector adipiscing elit.
							</div>
							<div class="know-more">
								<span class="brac">[</span><a href="">know more</a><span class="brac">]</span>
							</div>
						</div>
					</div>
					<div class="service">
			 		  <div class="service-name">
							landscaping
					  </div>
					   <div class="service-img">
							<img src="images/service-2.png" />
					   </div>
					   <div class="service-text">
							<div class="service-text-normal">
								Lorem ipsm dolor sit amet,
								consector adipiscing elit.
							</div>
							<div class="know-more">
								<span class="brac">[</span><a href="">know more</a><span class="brac">]</span>
							</div>
						</div>
					</div>
					<div class="service" >
			 		  <div class="service-name">
							manufacturing
					  </div>
					   <div class="service-img">
							<img src="images/service-3.png" />
					   </div>
					   <div class="service-text">
							<div class="service-text-normal">
								Lorem ipsm dolor sit amet,
								consector adipiscing elit.
							</div>
							<div class="know-more">
								<span class="brac">[</span><a href="">know more</a><span class="brac">]</span>
							</div>
						</div>
					</div>
					<div class="service">
			 		  <div class="service-name">
							domestic
					  </div>
					   <div class="service-img">
							<img src="images/service-4.png" />
					   </div>
					   <div class="service-text">
							<div class="service-text-normal">
								Lorem ipsm dolor sit amet,
								consector adipiscing elit.
							</div>
							<div class="know-more">
								<span class="brac">[</span><a href="">know more</a><span class="brac">]</span>
							</div>
						</div>
					</div>
					<div class="service">
			 		  <div class="service-name">
							service
					  </div>
					   <div class="service-img">
							<img src="images/service-5.png" />
					   </div>
					   <div class="service-text">
							<div class="service-text-normal">
								Lorem ipsm dolor sit amet,
								consector adipiscing elit.
							</div>
							<div class="know-more">
								<span class="brac">[</span><a href="">know more</a><span class="brac">]</span>
							</div>
						</div>
					</div>
					<div class="service" >
			 		  <div class="service-name">
							support
					  </div>
					   <div class="service-img">
							<img src="images/service-6.png" />
					   </div>
					   <div class="service-text">
							<div class="service-text-normal">
								Lorem ipsm dolor sit amet,
								consector adipiscing elit.
							</div>
							<div class="know-more">
								<span class="brac">[</span><a href="">know more</a><span class="brac">]</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="footer-wrap">
				<div class="footer-wrap-inner">
				<div class="links">
					<div class="head">
						Helpful Links
					</div>
					<div class="list">
						<ul>
							<li><a href="#">s pass</a></li>
							<li><a href="#">work permit</a></li>
							<li><a href="#">employer guidelines</a></li>
						</ul>
					</div>
				</div>
				<div class="connect-link">
					<div class="head">
							Connect with us
					</div>
					<div class="social-links">
						<div class="fb">
							<a href="#"><img src="images/fb-link.png" /></a>
						</div>
						<div class="linked-in">
							<a href="#"><img src="images/in-link.png" /></a>
						</div>
					</div>
				</div>
				<div class="licensed">
					<div class="head">
						Licensed & Approved by
					</div>
					<div class="footer-logo">
						<img src="images/logo-footer.png" />
					</div>
				</div>
				</div>
			</div>
            <div style="clear:both"></div>
			<div class="line"></div>
			 <div style="clear:both"></div>
			<div class="footer-nav">
				<div class="footer-nav-wrap">
					<div class="copy-right">
						&copy; 2015 Richer Recruitment Services &nbsp; Pte Ltd. All rights reserved
					</div>
                                    
					<div class="footer-menu">
						<ul>
							<li><img src="images/border.jpg" /><a href="#">terms of use & disclaimers</a></li>
							<li><img src="images/border.jpg" /><a href="#">privacy policy</a></li>
							<li><img src="images/border.jpg" /><a href="#">site map</a></li>
						</ul>
					</div>
					<div class="development-ref">
						Website designed and developed by Maxias.net 
					</div>
				</div>
			</div>
		</footer>
	</body>
