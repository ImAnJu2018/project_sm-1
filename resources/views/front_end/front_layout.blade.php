<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from chimpgroup.com/themeforest/smart-study/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Jul 2018 03:37:55 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SmartStudy.edu</title>
<link href={{asset("front_end/assets/css/bootstrap.css")}} rel="stylesheet">
<link href={{asset("front_end/assets/css/bootstrap-theme.css")}} rel="stylesheet">
<link href={{asset("front_end/assets/css/iconmoon.css")}} rel="stylesheet">
<link href={{asset("front_end/assets/css/chosen.css")}} rel="stylesheet">
<link href={{asset("front_end/assets/css/jquery.mobile-menu.css")}} rel="stylesheet">
<link href={{asset("front_end/assets/css/style.css")}} rel="stylesheet">
<link href={{asset("front_end/assets/cs-smartstudy-plugin.css")}} rel="stylesheet">
<link href={{asset("front_end/assets/css/color.css")}} rel="stylesheet">
<link href={{asset("front_end/assets/css/widget.css")}} rel="stylesheet">
<link href={{asset("front_end/assets/css/responsive.css")}} rel="stylesheet">
<!-- <link href={{asset("front_end/assets/css/bootstrap-rtl.css")}} rel="stylesheet"> Uncomment it if needed! -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src={{asset("front_end/assets/scripts/jquery.js")}}></script>
<script src={{asset("front_end/assets/scripts/modernizr.js")}}></script>
<script src={{asset("front_end/assets/scripts/bootstrap.min.js")}}></script>
</head>
<body class="wp-smartstudy">
<div class="wrapper"> 
	<!-- Side Menu Start -->
	<div id="overlay"></div>
    <div id="mobile-menu">
        <ul>
            <li>
                <div class="mm-search">
                    <form id="search" name="search">
                        <div class="input-group">
                            <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
					   <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <li class="active"><a href="front_layout.blade.php">Home</a></li>
			<li><a href="#">Courses</a>
				<ul>
					<li><a href="courses-grid.html">Courses grid view</a></li>
					<li><a href="courses-simple.html">Courses Simple view</a></li>
					<li><a href="courses-listing.html">Courses list view</a></li>
					<li><a href="cs-courses-detail.html">Courses Detail</a></li>
				</ul>
			</li>
			<li><a href="#">Events</a>
				<ul>
					<li><a href="user-detail.html">Student Dashboard</a></li>
					<li><a href="instructor-detail.html">instructor Dashboard</a></li>
					<li><a href="affiliations.html">Affiliations</a></li>
					<li><a href="typography.html">Typography</a></li>
					<li><a href="shortcode.html">Short code</a>
						<ul>
							<li><a href="loop.html">Loop</a></li>
						</ul>
					</li>
					<li><a href="about-us.html">About Us</a></li>
					<li><a href="faqs.html">FAQ's</a></li>
					<li><a href="under-construction.html">Maintenance Page</a></li>
					<li><a href="404.html">404 Page</a></li>
					<li><a href="signup.html">Signup / Login</a></li>
					<li><a href="pricing.html">Price Table</a></li>
					<li><a href="#">Team</a>
						<ul>
							<li><a href="team-listing.html"> Team List</a></li>
							<li><a href="team-grid.html"> Team Grid</a></li>
							<li><a href="team-detail.html"> Team Detail</a></li>
						</ul>
					</li>
					
					<li><a href="#">Shop</a>
						<ul>
							<li><a href="shop.html"> Products</a></li>
							<li><a href="shop-detail.html"> Detail</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="#">Academic</a>
				<ul>
					<li><a href="events-grid.html">Grid View</a></li>
					<li><a href="events-listing.html">List View</a></li>
					<li><a href="events-detail.html">Detail</a></li>
				</ul>
			</li>
			<li><a href="#">Notice</a>
				<ul>
					<li><a href="blog-medium.html">Medium List</a></li>
					<li><a href="blog-large.html">Large List</a></li>
					 <li><a href="blog-grid.html">Grid</a></li>
					<li><a href="blog-detail.html">Detail</a></li>
					<li><a href="blog-2.html">Masonry</a></li>
				</ul>
			</li>
			<li><a href="#">Contact</a>
				<ul>
					<li><a href="contact-us.html">Contact us 1</a></li>
					<li><a href="contact-us-02.html">Contact us 2</a></li>
				</ul>
			</li>
        </ul>
    </div>
	<!-- Side Menu End -->
	<!-- Header Start -->
	<header id="header" class=""> 
		<div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <ul class="top-nav nav-left">
                            <li><a href="#">Students</a></li>
                            <li><a href="#">Faculty &amp; Staff</a></li>
                            <li><a href="#">Parents</a></li>
                            <li><a href="#">Alumni</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    	<div class="cs-user">
                            <ul>
                                <li><a data-target="#cs-login" href="#" data-toggle="modal"><i class="icon-login"></i>Login</a></li>
                                <li><a data-target="#cs-signup" href="#" data-toggle="modal"><i class="icon-user2"></i>Signup</a></li>
<!--
                                <li>
                                    <div class="cs-user-login">
                                        <div class="cs-media">
                                            <figure><img alt="" src="front_end/assets/extra-images/user-login-img-1.jpg"></figure>
                                        </div>
                                        <a href="#">Alard William</a>
                                        <ul>
                                            <li><a href="user-detail.html"><i class="icon-user3"></i> About me</a></li>
                                            <li><a href="user-courses.html"><i class="icon-graduation-cap"></i> My Courses</a></li>
                                            <li><a href="user-short-listed.html"><i class="icon-heart"></i> Favorites</a></li>
                                            <li><a href="user-statements.html"><i class="icon-text-document"></i> Statement</a></li>
                                            <li class="active"><a href="user-account-setting.html"><i class="icon-gear"></i> Profile Setting</a></li>
                                            <li><a href="#"><i class="icon-log-out"></i> Logout</a></li>
                                        </ul>
                                    </div>
                                </li>
-->
                            </ul>
                        </div>
                        <div class="cs-modal">
                            <div class="modal fade" id="cs-signup" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Create Account</h4>
                                            <div class="cs-login-form">
                                                <form>
                                            <div class="input-holder">
                                                <label class="has-error" for="cs-username">
                                                    <strong>USERNAME</strong>
                                                    <i class="icon-add-user"></i>
                                                    <input type="text" class="" id="cs-username" placeholder="Type desired username">
                                                </label>
                                            </div>
                                            <div class="input-holder">
                                                <label for="cs-login-password">
                                                    <strong>Password</strong>
                                                    <i class="icon-lock"></i>
                                                    <input type="password" id="cs-login-password" placeholder="******">
                                                </label>
                                            </div>
                                            <div class="input-holder">
                                                <label for="cs-confirm-password">
                                                    <strong>confirm password</strong>
                                                    <i class="icon-lock"></i>
                                                    <input type="password" id="cs-confirm-password" placeholder="******">
                                                </label>
                                            </div>
                                            
                                            <div class="input-holder">
                                                <input class="cs-color csborder-color" type="submit" value="Create Account">
                                            </div>
                                        </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" data-target="#cs-login" data-toggle="modal" href="javascript:;" aria-hidden="true">Already have account</a>
                                            <div class="cs-separator"><span>or</span></div>
                                            <div class="cs-user-social">
                                                <em>Signin with your Social Networks</em>
                                                <ul>
                                                    <li><a href="#" data-original-title="facebook"><i class="icon-facebook-f"></i>facebook</a></li>
                                                    <li><a href="#" data-original-title="twitter"><i class="icon-twitter4"></i>twitter</a></li>
                                                    <li><a href="#" data-original-title="google-plus"><i class="icon-google4"></i>google</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="modal fade" id="cs-login" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>User Sign in</h4>
                                            <div class="cs-login-form">
                                                <form>
                                                    <div class="input-holder">
                                                        <label for="cs-username-1">
                                                            <strong>USERNAME</strong>
                                                            <i class="icon-add-user"></i>
                                                            <input type="text" class="" id="cs-username-1" placeholder="Type desired username">
                                                        </label>
                                                    </div>
                                                    <div class="input-holder">
                                                        <label for="cs-login-password-1">
                                                            <strong>Password</strong>
                                                            <i class="icon-lock"></i>
                                                            <input type="password" id="cs-login-password-1" placeholder="******">
                                                        </label>
                                                    </div>
                                                    <div class="input-holder">
                                                        <a class="btn-forgot-pass" data-dismiss="modal" data-target="#user-forgot-pass" data-toggle="modal" href="javascript:;" aria-hidden="true"><i class=" icon-question-circle"></i> Forgot password?</a>
                                                    </div>
                                                    <div class="input-holder">
                                                        <input class="cs-color csborder-color" type="submit" value="SIGN IN">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="cs-separator"><span>or</span></div>
                                            <div class="cs-user-social">
                                                <em>Signin with your Social Networks</em>
                                                <ul>
                                                    <li><a href="#" data-original-title="facebook"><i class="icon-facebook-f"></i>facebook</a></li>
                                                    <li><a href="#" data-original-title="twitter"><i class="icon-twitter4"></i>twitter</a></li>
                                                    <li><a href="#" data-original-title="google-plus"><i class="icon-google4"></i>google</a></li>
                                                </ul>
                                            </div>
                                            <div class="cs-user-signup">
                                                <i class="icon-add-user"></i>
                                                <strong>Not a Member yet? </strong>
                                                <a class="cs-color" data-dismiss="modal" data-target="#cs-signup" data-toggle="modal" href="javascript:;" aria-hidden="true">Signup Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="user-forgot-pass" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Password Recovery</h4>
                                            <div class="cs-login-form">
                                                <form>
                                                    <div class="input-holder">
                                                        <label for="cs-email-1">
                                                            <strong>Email</strong>
                                                            <i class="icon-envelope"></i>
                                                            <input type="email" class="" id="cs-email-1" placeholder="Type desired username">
                                                        </label>
                                                    </div>
                                                    <div class="input-holder">
                                                        <input class="cs-color csborder-color" type="submit" value="Send">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="cs-user-signup">
                                                <i class="icon-add-user"></i>
                                                <strong>Not a Member yet? </strong>
                                                <a href="javascript:;" data-toggle="modal" data-target="#cs-signup" data-dismiss="modal" class="cs-color" aria-hidden="true">Signup Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <ul class="top-nav nav-right">
                            <li><a href="#">APPLY</a></li>
                            <li><a href="#">PROGRAMS &amp; DEGREES</a></li>
                            <li><a href="#">FIND FUNDINg</a></li> 
                        </ul>
                    </div>
                </div>
            </div>
		</div>
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                        <div class="cs-logo cs-logo-dark">
                            <div class="cs-media">
                                <figure><a href="front_layout.blade.php"><img src={{asset("front_end/assets/images/cs-logo.png")}} alt="" /></a></figure>
                            </div>
                        </div>
                        <div class="cs-logo cs-logo-light">
                            <div class="cs-media">
                                <figure><a href="front_layout.blade.php"><img src={{asset("front_end/assets/images/cs-logo-light.png")}} alt="" /></a></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-6 col-xs-6">
                        <div class="cs-main-nav pull-right">
                            <nav class="main-navigation">
                                <ul>
                                    <li><a href="index.html">Home</a><span>About College</span></li>
                                    <li class="menu-item-has-children"><a href="#">Courses</a>
                                        <span> Online Education</span>
                                        <ul>
                                            <li><a href="courses-grid.html">Courses grid view</a></li>
                                            <li><a href="courses-simple.html">Courses Simple view</a></li>
                                            <li><a href="courses-listing.html">Courses list view</a></li>
                                            <li><a href="cs-courses-detail.html">Courses Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Events</a><span>All you need</span>
                                    	<ul>
                                            <li><a href="user-detail.html">Student Dashboard</a></li>
                                            <li><a href="instructor-detail.html">instructor Dashboard</a></li>
								    <li><a href="affiliations.html">Affiliations</a></li>
                                        	<li><a href="typography.html">Typography</a></li>
                                            <li class="menu-item-has-children"><a href="shortcode.html">Short code</a>
												<ul>
													<li><a href="loop.html">Loop</a></li>
												</ul>
											</li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="faqs.html">FAQ's</a></li>
                                            <li><a href="under-construction.html">Maintenance Page</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                            <li><a href="signup.html">Signup / Login</a></li>
                                            <li><a href="pricing.html">Price Table</a></li>
                                        	<li class="menu-item-has-children"><a href="#">Team</a>
                                            	<ul>
                                                    <li><a href="team-listing.html"> Team List</a></li>
                                                    <li><a href="team-grid.html"> Team Grid</a></li>
                                                    <li><a href="team-detail.html"> Team Detail</a></li>
                                                </ul>
                                            </li>
                                            
                                            <li class="menu-item-has-children"><a href="#">Shop</a>
                                            	<ul>
                                                    <li><a href="shop.html"> Products</a></li>
                                                    <li><a href="shop-detail.html"> Detail</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Academic</a><span>University Events</span>
                                    	<ul>
                                        	<li><a href="events-grid.html">Grid View</a></li>
                                            <li><a href="events-listing.html">List View</a></li>
                                            <li><a href="events-detail.html">Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Notice</a><span>Learning Objectives</span>
                                    	<ul>
                                        	<li><a href="blog-medium.html">Medium List</a></li>
                                            <li><a href="blog-large.html">Large List</a></li>
                                             <li><a href="blog-grid.html">Grid</a></li>
                                            <li><a href="blog-detail.html">Detail</a></li>
											<li><a href="blog-2.html">Masonry</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Contact</a><span>inquire with us</span>
                                    	<ul>
                                            <li><a href="contact-us.html">Contact us 1</a></li>
                                            <li><a href="contact-us-02.html">Contact us 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="cs-search-area">
                                        <div class="cs-menu-slide">
                                            <div class="mm-toggle">
                                                <i class="icon-align-justify"></i>
                                            </div>            
                                        </div>
                                        <div class="search-area">
                                            <a href="#"><i class="icon-search2"></i></a>
                                            <form>
                                                <div class="input-holder">
                                                    <i class="icon-search2"></i>
                                                    <input type="text" placeholder="Enter any keyword">
                                                    <label class="cs-bgcolor">
                                                        <i class="icon-search5"></i>
                                                        <input type="submit" value="search">
                                                    </label>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                            <div class="cs-search-area hidden-md hidden-lg">
                                <div class="cs-menu-slide">
                                    <div class="mm-toggle">
                                        <i class="icon-align-justify"></i>
                                    </div>            
                                </div>
                                <div class="search-area">
                                    <a href="#"><i class="icon-search2"></i></a>
                                    <form>
                                        <div class="input-holder">
                                            <i class="icon-search2"></i>
                                            <input type="text" placeholder="Enter any keyword">
                                            <label class="cs-bgcolor">
                                                <i class="icon-search5"></i>
                                                <input type="submit" value="search">
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</header>
	<!-- Header End --> 
	<!-- Banner Start --> 
	<div class="page-section banner_bg" style="background:url(assets/images/banner.jpg)">
<!--
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="cs-column-text">
						<span style="display:inline-block;padding:10px 20px;background:rgba(0,0,0,0.8);color:#FFF;font-size:18px;margin-bottom:22px;">What would you like to learn?</span>
						<h1 style="color:#ffffff !important;line-height:64px !important;text-transform:capitalize !important;">Brighton Experience</h1>
						<p style="font-size:36px !important;line-height:42px !important;color:#FFF !important;font-weight:400 !important;margin-bottom:30px;">an inspiring place to work and study</p>
						<a style="font-size:13px;font-weight:700;line-height:19px;padding:16px 28px;border-radius:50px;color:#FFF;text-decoration:none;outline:none;" class="cs-bgcolor" href="#">About Smart Study</a>
					</div>
				</div>
			</div>
		</div>
-->
	</div>
	<!-- Banner End --> 
	<!-- Main Start -->
	<div class="main-section">
		<div class="page-section" style="margin-bottom:45px;margin-top:-60px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<ul class="cs-top-categories">
							<li><a href="#" style="background:#8a9045;"><i class="icon-uniF1032"></i>Science</a></li>
							<li><a href="#" style="background:#a88b60;"><i class="icon-uniF1022"></i>EconomicS</a></li>
							<li><a href="#" style="background:#3e769a;"><i class="icon-uniF1052"></i>cOMPUTING</a></li>
							<li><a href="#" style="background:#c16622;"><i class="icon-uniF1012"></i>MATHMATICS</a></li>
							<li><a href="#" style="background:#896ca9;"><i class="icon-uniF1042"></i>Web Design</a></li>
							<li><a href="#" style="background:#dd9d13;"><i class="icon-uniF1002"></i>Business</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="page-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="cs-element-title" style="margin-bottom:30px;">
									<h2>School Spotlights</h2>
								</div>
							</div>
							<ul class="cs-bloggrid-slider-sm">
								<li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="cs-blog blog-grid">
									<div class="cs-media">
										<figure><a href="#"><img src={{asset("front_end/assets/extra-images/Blogs-grid-img1.jpg")}} alt=""></a><figcaption>athelitcs</figcaption></figure>
									</div>
									<div class="cs-blog-text">
										<div class="post-options">
											<span class="post-date">23.12.2014</span>
										</div>
										<span class="post-comments">10</span>
										<div class="post-title"><h6><a href="#">Martin Luther King Jr. and  the best Understan</a></h6></div>
										<a href="#" class="cs-readmore-btn">Read more</a>
									</div>
								  </div>
								</li>
								<li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="cs-blog blog-grid">
									<div class="cs-media">
										<figure><a href="#"><img src={{asset("front_end/assets/extra-images/Blogs-grid-img2.jpg")}} alt=""></a><figcaption>athelitcs</figcaption></figure>
									</div>
									<div class="cs-blog-text">
										<div class="post-options">
											<span class="post-date">23.12.2014</span>
										</div>
										<span class="post-comments">10</span>
										<div class="post-title"><h6><a href="#">Martin Luther King Jr. and  the best Understan</a></h6></div>
										<a href="#" class="cs-readmore-btn">Read more</a>
									</div>
								  </div>
								</li>
								<li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="cs-blog blog-grid">
									<div class="cs-media">
										<figure><a href="#"><img src={{asset("front_end/assets/extra-images/Blogs-grid-img3.jpg")}} alt=""></a><figcaption>athelitcs</figcaption></figure>
									</div>
									<div class="cs-blog-text">
										<div class="post-options">
											<span class="post-date">23.12.2014</span>
										</div>
										<span class="post-comments">10</span>
										<div class="post-title"><h6><a href="#">Martin Luther King Jr. and  the best Understan</a></h6></div>
										<a href="#" class="cs-readmore-btn">Read more</a>
									</div>
								  </div>
								</li>
								<li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="cs-blog blog-grid">
									<div class="cs-media">
										<figure><a href="#"><img src="front_end/assets/extra-images/Blogs-grid-img1.jpg" alt=""></a><figcaption>athelitcs</figcaption></figure>
									</div>
									<div class="cs-blog-text">
										<div class="post-options">
											<span class="post-date">23.12.2014</span>
										</div>
										<span class="post-comments">10</span>
										<div class="post-title"><h6><a href="#">Martin Luther King Jr. and  the best Understan</a></h6></div>
										<a href="#" class="cs-readmore-btn">Read more</a>
									</div>
								  </div>
								</li>
								<li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="cs-blog blog-grid">
									<div class="cs-media">
										<figure><a href="#"><img src="front_end/assets/extra-images/Blogs-grid-img2.jpg" alt=""></a><figcaption>athelitcs</figcaption></figure>
									</div>
									<div class="cs-blog-text">
										<div class="post-options">
											<span class="post-date">23.12.2014</span>
										</div>
										<span class="post-comments">10</span>
										<div class="post-title"><h6><a href="#">Martin Luther King Jr. and  the best Understan</a></h6></div>
										<a href="#" class="cs-readmore-btn">Read more</a>
									</div>
								  </div>
								</li>
								<li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="cs-blog blog-grid">
									<div class="cs-media">
										<figure><a href="#"><img src="front_end/assets/extra-images/Blogs-grid-img3.jpg" alt=""></a><figcaption>athelitcs</figcaption></figure>
									</div>
									<div class="cs-blog-text">
										<div class="post-options">
											<span class="post-date">23.12.2014</span>
										</div>
										<span class="post-comments">10</span>
										<div class="post-title"><h6><a href="#">Martin Luther King Jr. and  the best Understan</a></h6></div>
										<a href="#" class="cs-readmore-btn">Read more</a>
									</div>
								  </div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="cs-element-title" style="margin-bottom:30px;">
									<h2>Research Lab</h2>
								</div>
							</div>
							<ul class="cs-bloggrid-slider-sm">
								<li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="cs-blog blog-grid">
									<div class="cs-media">
										<figure><a href="#"><img src="front_end/assets/extra-images/Blogs-grid-img3.jpg" alt=""></a><figcaption>athelitcs</figcaption></figure>
									</div>
									<div class="cs-blog-text">
										<div class="post-options">
											<span class="post-date">23.12.2014</span>
										</div>
										<span class="post-comments">10</span>
										<div class="post-title"><h6><a href="#">Martin Luther King Jr. and  the best Understan</a></h6></div>
										<a href="#" class="cs-readmore-btn">Read more</a>
									</div>
								  </div>
								</li>
								<li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="cs-blog blog-grid">
									<div class="cs-media">
										<figure><a href="#"><img src="front_end/assets/extra-images/Blogs-grid-img2.jpg" alt=""></a><figcaption>athelitcs</figcaption></figure>
									</div>
									<div class="cs-blog-text">
										<div class="post-options">
											<span class="post-date">23.12.2014</span>
										</div>
										<span class="post-comments">10</span>
										<div class="post-title"><h6><a href="#">Martin Luther King Jr. and  the best Understan</a></h6></div>
										<a href="#" class="cs-readmore-btn">Read more</a>
									</div>
								  </div>
								</li>
								<li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="cs-blog blog-grid">
									<div class="cs-media">
										<figure><a href="#"><img src="front_end/assets/extra-images/Blogs-grid-img1.jpg" alt=""></a><figcaption>athelitcs</figcaption></figure>
									</div>
									<div class="cs-blog-text">
										<div class="post-options">
											<span class="post-date">23.12.2014</span>
										</div>
										<span class="post-comments">10</span>
										<div class="post-title"><h6><a href="#">Martin Luther King Jr. and  the best Understan</a></h6></div>
										<a href="#" class="cs-readmore-btn">Read more</a>
									</div>
								  </div>
								</li>
								<li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="cs-blog blog-grid">
									<div class="cs-media">
										<figure><a href="#"><img src="front_end/assets/extra-images/Blogs-grid-img3.jpg" alt=""></a><figcaption>athelitcs</figcaption></figure>
									</div>
									<div class="cs-blog-text">
										<div class="post-options">
											<span class="post-date">23.12.2014</span>
										</div>
										<span class="post-comments">10</span>
										<div class="post-title"><h6><a href="#">Martin Luther King Jr. and  the best Understan</a></h6></div>
										<a href="#" class="cs-readmore-btn">Read more</a>
									</div>
								  </div>
								</li>
								<li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="cs-blog blog-grid">
									<div class="cs-media">
										<figure><a href="#"><img src="front_end/assets/extra-images/Blogs-grid-img2.jpg" alt=""></a><figcaption>athelitcs</figcaption></figure>
									</div>
									<div class="cs-blog-text">
										<div class="post-options">
											<span class="post-date">23.12.2014</span>
										</div>
										<span class="post-comments">10</span>
										<div class="post-title"><h6><a href="#">Martin Luther King Jr. and  the best Understan</a></h6></div>
										<a href="#" class="cs-readmore-btn">Read more</a>
									</div>
								  </div>
								</li>
								<li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="cs-blog blog-grid">
									<div class="cs-media">
										<figure><a href="#"><img src="front_end/assets/extra-images/Blogs-grid-img1.jpg" alt=""></a><figcaption>athelitcs</figcaption></figure>
									</div>
									<div class="cs-blog-text">
										<div class="post-options">
											<span class="post-date">23.12.2014</span>
										</div>
										<span class="post-comments">10</span>
										<div class="post-title"><h6><a href="#">Martin Luther King Jr. and  the best Understan</a></h6></div>
										<a href="#" class="cs-readmore-btn">Read more</a>
									</div>
								  </div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="cs-find-search">
							<h6>Find your course</h6>
							<span>Ranked as one of the world's most</span>
							<form>
								<div class="cs-label-area">
									<input id="course-id" type="radio" name="course" />
									<label for="course-id">Class Name</label>
									<input id="course-name" type="radio" name="course" />
									<label for="course-name">Course Name</label>
								</div>
								<div class="cs-input-area">
									<div class="cs-input-holder"><i class="icon-search"></i><input type="text" placeholder="Enter Course name" /></div>
									<select data-placeholder="Select Category" class="chosen-select" tabindex="5">
										  <option>Select Category</option>
										  <option>Select Category</option>
										  <option>Select Category</option>
										  <option>Select Category</option>
									  </select>
								</div>
								<ul class="cs-suggestions-list">
									<li><i class="icon-keyboard_arrow_right"></i>Order your prospectus</li>
									<li><i class="icon-keyboard_arrow_right"></i>A-Z courses</li>
								</ul>
								<button class="cs-bgcolor"><i class="icon-search3"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div> 
<!--
		<div class="page-section" style="background:#f9fafa;padding-top:62px;margin-bottom:82px;">
			<div class="container">
			  <div class="row">
			  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="cs-section-title left">
					  <h2>Departments & Programs</h2>
					  <p style="color:#aaaaaa !important;">Whatever it is you want to do, Concordia’s more than 60 majors, including 15 honors majors.</p>
					</div>
              	</div>
				<aside class="section-sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
              	<div class="widget cs-widget-links">
                	<ul>
                    	<li><a href="#">About University</a></li>
                        <li><a href="#">Frequently Asked Questions</a></li>
                        <li><a href="#">Price Plan</a></li>
                        <li><a href="#">University Galleries</a></li>
                        <li><a href="#">Faculty &amp; Staff Directory</a></li>
                        <li><a href="#">Students</a></li>
                        <li><a href="#">Bbpress Forums</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>              
                </div>
              </aside>
				<div class="page-content col-lg-9 col-md-9 col-sm-12 col-xs-12">
				  <div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="cs-courses courses-grid">
							<div class="cs-media">
								<figure><a href="#"><img src="front_end/assets/extra-images/course-grid-img1.jpg" alt=""/></a></figure>
							</div>
							<div class="cs-text">
								<span class="cs-caption">CC</span>
								<div class="cs-rating">
								  <div class="cs-rating-star">
									<span class="rating-box" style="width:100%;"></span>
								  </div>
								</div>
								<div class="cs-post-title">
								  <h5><a href="#">Latest Computer Science and Programming</a></h5>
								</div>
								<span class="cs-courses-price"><em>$</em>289.99</span>
								<div class="cs-post-meta">
								  <span>By
									<a href="#" class="cs-color">James,</a>
									<a href="#" class="cs-color">Howdson</a>
								  </span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="cs-courses courses-grid">
							<div class="cs-media">
								<figure><a href="#"><img src="front_end/assets/extra-images/course-grid-img2.jpg" alt=""/></a></figure>
							</div>
							<div class="cs-text">
								<div class="cs-rating">
								  <div class="cs-rating-star">
									<span class="rating-box" style="width:100%;"></span>
								  </div>
								</div>
								<div class="cs-post-title">
								  <h5><a href="#">Basic Time Management Course</a></h5>
								</div>
								<span class="cs-courses-price"><em>$</em>189.99</span>
								<div class="cs-post-meta">
								  <span>By
									<a href="#" class="cs-color">James,</a>
									<a href="#" class="cs-color">Howdson</a>
								  </span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="cs-courses courses-grid">
							<div class="cs-media">
								<figure><a href="#"><img src="front_end/assets/extra-images/course-grid-img3.jpg" alt=""/></a></figure>
							</div>
							<div class="cs-text">
								<div class="cs-rating">
								  <div class="cs-rating-star">
									<span class="rating-box" style="width:100%;"></span>
								  </div>
								</div>
								<div class="cs-post-title">
								  <h5><a href="#">How to Become a Startup Founder</a></h5>
								</div>
								<span class="cs-courses-price"><em>$</em>175.99</span>
								<div class="cs-post-meta">
								  <span>By
									<a href="#" class="cs-color">James,</a>
									<a href="#" class="cs-color">Howdson</a>
								  </span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="cs-courses courses-grid">
							<div class="cs-media">
								<figure><a href="#"><img src="front_end/assets/extra-images/course-grid-img4.jpg" alt=""/></a></figure>
							</div>
							<div class="cs-text">
								<div class="cs-rating">
								  <div class="cs-rating-star">
									<span class="rating-box" style="width:100%;"></span>
								  </div>
								</div>
								<div class="cs-post-title">
								  <h5><a href="#">How to Design a Logo a Beginners Course</a></h5>
								</div>
								<span class="cs-courses-price"><em>$</em>49.99</span>
								<div class="cs-post-meta">
								  <span>By
									<a href="#" class="cs-color">James,</a>
									<a href="#" class="cs-color">Howdson</a>
								  </span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="cs-courses courses-grid">
							<div class="cs-media">
								<figure><a href="#"><img src="front_end/assets/extra-images/course-grid-img5.jpg" alt=""/></a></figure>
							</div>
							<div class="cs-text">
								<span class="cs-caption">CC</span>
								<div class="cs-rating">
								  <div class="cs-rating-star">
									<span class="rating-box" style="width:100%;"></span>
								  </div>
								</div>
								<div class="cs-post-title">
								  <h5><a href="#">Introduction to Mobile Apps Development</a></h5>
								</div>
								<span class="cs-courses-price"><em>$</em>155.99</span>
								<div class="cs-post-meta">
								  <span>By
									<a href="#" class="cs-color">James,</a>
									<a href="#" class="cs-color">Howdson</a>
								  </span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="cs-courses courses-grid">
							<div class="cs-media">
								<figure><a href="#"><img src="front_end/assets/extra-images/course-grid-img6.jpg" alt=""/></a></figure>
							</div>
							<div class="cs-text">
								<div class="cs-rating">
								  <div class="cs-rating-star">
									<span class="rating-box" style="width:100%;"></span>
								  </div>
								</div>
								<div class="cs-post-title">
								  <h5><a href="#">Latest Computer Science and Programming</a></h5>
								</div>
								<span class="cs-free">Free</span>
								<div class="cs-post-meta">
								  <span>By
									<a href="#" class="cs-color">James,</a>
									<a href="#" class="cs-color">Howdson</a>
								  </span>
								</div>
							</div>
						</div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		</div>
-->
		<div class="page-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="widget cs-text-widget">
						<div class="cs-text" style="background:#FFF;padding:0;">
							<h2>School Events</h2>
							<p>Text of the printing and typesetting best industry. Lorem Ipsum has been the nome industry's.
standard text ever.</p>
							<a href="#" class="cs-bgcolor"><i class="icon-keyboard_arrow_right"></i> Check Calender</a>
						</div>
					</div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="cs-event left">
									<div class="cs-media">
										<span><strong>dec</strong>23</span>
									</div>
									<div class="cs-text">
										<em>12:59Pm-03:00Pm</em>
										<h5 style="margin-bottom:30px;"><a href="#">Four Sheridan teams set IAM3D Challenge Starting.</a></h5>
										<span><i class="icon-map-marker"></i>Rolson Garden-New Walters Street</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="cs-event left">
									<div class="cs-media">
										<span><strong>dec</strong>23</span>
									</div>
									<div class="cs-text">
										<em>12:59Pm-03:00Pm</em>
										<h5 style="margin-bottom:30px;"><a href="#">Four Sheridan teams set IAM3D Challenge Starting.</a></h5>
										<span><i class="icon-map-marker"></i>Rolson Garden-New Walters Street</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="cs-event left">
									<div class="cs-media">
										<span><strong>dec</strong>23</span>
									</div>
									<div class="cs-text">
										<em>12:59Pm-03:00Pm</em>
										<h5 style="margin-bottom:30px;"><a href="#">Four Sheridan teams set IAM3D Challenge Starting.</a></h5>
										<span><i class="icon-map-marker"></i>Rolson Garden-New Walters Street</span>
									</div>
								</div>
							</div>
                		</div>
					</div>
				</div>
			</div>
		</div>  
		<div class="page-section" style="margin-bottom:30px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <div class="cs-element-title" style="margin-bottom:30px;">
	                        <h2>School Faculty</h2>
	                    </div>
					</div>
					<ul class="cs-teamlist-slider">
						<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    	<div class="cs-team listing loop">
	                        	<div class="cs-media">
	                            	<figure>
	                                	<a href="#"><img src="front_end/assets/extra-images/faculty-01.jpg" alt="#"></a>
	                                </figure>
	                            </div>
	                            <div class="cs-text">
	                            	<h5><a href="#" class="cs-color">Sarah Johnson</a></h5>
	                                <span>Associate Professor of Anthropology</span>
	                                <p>Diet and health, human osteology,paleopathology/ epidemiology, human evolution, disease ecology, human adaptation, Stable.</p>
	                                <div class="cs-social-media">
	                                	<ul>
	                                    	<li style="margin-right:5px !important;"><a href="#" data-original-title="facebook"><i class="icon-facebook2"></i></a></li>
	                                        <li style="margin-right:5px !important;"><a href="#" data-original-title="pinterest"><i class="icon-pinterest3"></i></a></li>
	                                        <li style="margin-right:5px !important;"><a href="#" data-original-title="twitter"><i class="icon-twitter2"></i></a></li>
	                                        <li style="margin-right:5px !important;"><a href="#" data-original-title="google"><i class="icon-google4"></i></a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
						</li>
						<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    	<div class="cs-team listing loop">
	                        	<div class="cs-media">
	                            	<figure>
	                                	<a href="#"><img src="front_end/assets/extra-images/faculty-02.jpg" alt="#"></a>
	                                </figure>
	                            </div>
	                            <div class="cs-text">
	                            	<h5><a href="#" class="cs-color">Arthur Springs</a></h5>
	                                <span>Associate Professor of Anthropology</span>
	                                <p>Diet and health, human osteology,paleopathology/ epidemiology, human evolution, disease ecology, human adaptation, Stable.</p>
	                                <div class="cs-social-media">
	                                	<ul>
	                                    	<li style="margin-right:5px !important;"><a href="#" data-original-title="facebook"><i class="icon-facebook2"></i></a></li>
	                                        <li style="margin-right:5px !important;"><a href="#" data-original-title="pinterest"><i class="icon-pinterest3"></i></a></li>
	                                        <li style="margin-right:5px !important;"><a href="#" data-original-title="twitter"><i class="icon-twitter2"></i></a></li>
	                                        <li style="margin-right:5px !important;"><a href="#" data-original-title="google"><i class="icon-google4"></i></a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
						</li>
						<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    	<div class="cs-team listing loop">
	                        	<div class="cs-media">
	                            	<figure>
	                                	<a href="#"><img src="front_end/assets/extra-images/faculty-01.jpg" alt="#"></a>
	                                </figure>
	                            </div>
	                            <div class="cs-text">
	                            	<h5><a href="#" class="cs-color">Sarah Johnson</a></h5>
	                                <span>Associate Professor of Anthropology</span>
	                                <p>Diet and health, human osteology,paleopathology/ epidemiology, human evolution, disease ecology, human adaptation, Stable.</p>
	                                <div class="cs-social-media">
	                                	<ul>
	                                    	<li style="margin-right:5px !important;"><a href="#" data-original-title="facebook"><i class="icon-facebook2"></i></a></li>
	                                        <li style="margin-right:5px !important;"><a href="#" data-original-title="pinterest"><i class="icon-pinterest3"></i></a></li>
	                                        <li style="margin-right:5px !important;"><a href="#" data-original-title="twitter"><i class="icon-twitter2"></i></a></li>
	                                        <li style="margin-right:5px !important;"><a href="#" data-original-title="google"><i class="icon-google4"></i></a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
						</li>
						<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    	<div class="cs-team listing loop">
	                        	<div class="cs-media">
	                            	<figure>
	                                	<a href="#"><img src="front_end/assets/extra-images/faculty-02.jpg" alt="#"></a>
	                                </figure>
	                            </div>
	                            <div class="cs-text">
	                            	<h5><a href="#" class="cs-color">Arthur Springs</a></h5>
	                                <span>Associate Professor of Anthropology</span>
	                                <p>Diet and health, human osteology,paleopathology/ epidemiology, human evolution, disease ecology, human adaptation, Stable.</p>
	                                <div class="cs-social-media">
	                                	<ul>
	                                    	<li style="margin-right:5px !important;"><a href="#" data-original-title="facebook"><i class="icon-facebook2"></i></a></li>
	                                        <li style="margin-right:5px !important;"><a href="#" data-original-title="pinterest"><i class="icon-pinterest3"></i></a></li>
	                                        <li style="margin-right:5px !important;"><a href="#" data-original-title="twitter"><i class="icon-twitter2"></i></a></li>
	                                        <li style="margin-right:5px !important;"><a href="#" data-original-title="google"><i class="icon-google4"></i></a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="page-section" style="margin-bottom:90px;">
            <ul class="row cs-history-slider">
                 <li class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                     <div class="cs-media">
                         <figure>
                             <img src="front_end/assets/extra-images/history-01.jpg" alt="" />
                             <figcaption>1889</figcaption>
                         </figure>
                      </div>
                      <div class="cs-text">
                         <h5>Register for classes</h5>
                         <p>Through its curriculum of liberal arts and sciences an pre-professional programs, Stone hill College provides an education of the highest.</p>
                      </div>
                 </li>
                 <li class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                     <div class="cs-media">
                         <figure>
                             <img src="front_end/assets/extra-images/history-02.jpg" alt="" />
                             <figcaption>1908</figcaption>
                         </figure>
                      </div>
                      <div class="cs-text">
                         <h5>Register for classes</h5>
                         <p>Through its curriculum of liberal arts and sciences an pre-professional programs, Stone hill College provides an education of the highest.</p>
                      </div>
                 </li>
                 <li class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                     <div class="cs-media">
                         <figure>
                             <img src="front_end/assets/extra-images/history-03.jpg" alt="" />
                             <figcaption>1963</figcaption>
                         </figure>
                      </div>
                      <div class="cs-text">
                         <h5>Register for classes</h5>
                         <p>Through its curriculum of liberal arts and sciences an pre-professional programs, Stone hill College provides an education of the highest.</p>
                      </div>
                 </li>
                 <li class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                     <div class="cs-media">
                         <figure>
                             <img src="front_end/assets/extra-images/history-04.jpg" alt="" />
                             <figcaption>2000</figcaption>
                         </figure>
                      </div>
                      <div class="cs-text">
                         <h5>Register for classes</h5>
                         <p>Through its curriculum of liberal arts and sciences an pre-professional programs, Stone hill College provides an education of the highest.</p>
                      </div>
                 </li>
                 <li class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                     <div class="cs-media">
                         <figure>
                             <img src="front_end/assets/extra-images/history-05.jpg" alt="" />
                             <figcaption>2004</figcaption>
                         </figure>
                      </div>
                      <div class="cs-text">
                         <h5>Register for classes</h5>
                         <p>Through its curriculum of liberal arts and sciences an pre-professional programs, Stone hill College provides an education of the highest.</p>
                      </div>
                 </li>
                <li class="col-lg-2 col-md-3 col-sm-4 col-xs-12 selected">
                     <div class="cs-media">
                         <figure>
                             <img src="front_end/assets/extra-images/history-02.jpg" alt="" />
                             <figcaption>1963</figcaption>
                         </figure>
                      </div>
                      <div class="cs-text">
                         <h5>Register for classes</h5>
                         <p>Through its curriculum of liberal arts and sciences an pre-professional programs, Stone hill College provides an education of the highest.</p>
                      </div>
                 </li>
            </ul>
        </div>
		<div class="page-section" style="margin-bottom:28px;">
         	<div class="container">
				 <div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						 <div class="cs-team">
							 <div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="cs-element-title" style="margin-bottom:30px;">
										<h2>Talented Students</h2>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="cs-team fancy">
										<div class="cs-media">
											<figure><img src="front_end/assets/extra-images/students-img-01.jpg" alt=""></figure>
										</div>
										<div class="cs-text">
											<h5><a class="cs-color" href="#">Margaret Mead</a></h5>
											<span>Talentpool Scholarship</span>
											<p>Center without the knowledge and we are  experience that I gained through the Foundation  the knowledge.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="cs-team fancy">
										<div class="cs-media"> 
											<figure><img src="front_end/assets/extra-images/students-img-02.jpg" alt=""></figure>
										</div>
										<div class="cs-text">
											<h5><a class="cs-color" href="#">Margaret Mead</a></h5>
											<span>Talentpool Scholarship</span>
											<p>Center without the knowledge and we are  experience that I gained through the Foundation  the knowledge.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="cs-team fancy">
										<div class="cs-media"> 
											<figure><img src="front_end/assets/extra-images/students-img-03.jpg" alt=""></figure>
										</div>
										<div class="cs-text">
											<h5><a class="cs-color" href="#">Margaret Mead</a></h5>
											<span>Talentpool Scholarship</span>
											<p>Center without the knowledge and we are  experience that I gained through the Foundation  the knowledge.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="cs-element-title" style="margin-bottom:30px;">
							<h2>Quick FAQS</h2>
						</div>
						<div class="cs-quick-faqs">
							<p>Printing and typesetting best industry. Lorem Ipsum has been the best industry.</p>
							<ul class="row">
								<li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<a href="#"><i class="icon-circle-right"></i>How to Enroll</a>
								</li>
								<li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<a href="#"><i class="icon-circle-right"></i>CAMPUS MAP</a>
								</li>
								<li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<a href="#"><i class="icon-circle-right"></i>Choose a Campus</a>
								</li>
								<li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<a href="#"><i class="icon-circle-right"></i>Choose a Campus</a>
								</li>
								<li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<a href="#"><i class="icon-circle-right"></i>Take a Test</a>
								</li>
								<li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<a href="#"><i class="icon-circle-right"></i>Classes Structure</a>
								</li>
								<li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<a href="#"><i class="icon-circle-right"></i>How to Pay</a>
								</li>
								<li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<a href="#"><i class="icon-circle-right"></i>How to Pay</a>
								</li>
							</ul>
							<a href="#" class="btn-faq"><i class="icon-circle-right"></i>View all FAQs</a>
							<a href="#" class="btn-faq"><i class="icon-circle-right"></i>Ask a Question</a>
						</div>
					</div>
				</div>
        	</div>
		</div>
	<!-- Main End --> 
	
	<!-- Footer Start -->
	<footer id="footer"> 
		<div class="cs-footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-text">
                            <div class="widget-section-title"><h6 style="color:#fff !important">Contact us</h6></div>
                            <ul>
                                <li>
                                	<i class="icon-light-bulb "></i>
                                    <p>6330 South 3000 East, Suite 700 Salt Lake City, UT 84121</p>
                                </li>
                                <li>
                                	<i class="icon-phone3"></i>
                                    <p>800 123 456 789</p>
                                </li>
                                <li>
                                	<i class="icon-mail"></i>
                                    <p><a href="mailto:info@canvaslms.com">info@canvaslms.com</a></p>
                                </li>
                                <li>
                                	<i class="icon-pin"></i>
                                    <p>08:00 to 07:40</p>
                                </li>
                            </ul>	
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-categores">
                            <div class="widget-section-title"><h6 style="color:#fff !important">Student & Staff</h6></div>
                            <ul>
                                <li><a href="#">Student portal</a></li>
                                <li><a href="#">Staff portal</a></li>
                                <li><a href="#">Find a member of staff</a></li>
                                <li><a href="#">Greenwich VIP</a></li>
                                <li><a href="#">IT & library services</a></li>
                                <li><a href="#">Greenwich Connect</a></li>
                            </ul>	
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-useful-links">
                            <div class="widget-section-title"><h6 style="color:#fff !important">Useful links</h6></div>
                            <ul>
                                <li><a href="#">Accessibility</a></li>
                                <li><a href="#">Privacy and cookies</a></li>
                                <li><a href="#">Freedom of Information</a></li>
                                <li><a href="#">Legal information</a></li>
                                <li><a href="#">Terms & conditions</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>	
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-news-letter">
                            <div class="widget-section-title"><h6 style="color:#fff !important">NewsLetter</h6></div>
                            <p>Subcribe to out newsletter. We do not spam. We promise</p>
							<div class="cs-form">
                            	<form>
                                	<div class="input-holder">
                                    	<i class="icon-envelope3"></i>
                                    	<input type="email" placeholder="example@email.com">
                                        <label>
                                    		<input type="submit" value="Subscribe" class="cs-bgcolor">
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
        <div class="container">
        	<div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                	<div class="cs-footer-logo-holder center">
                        <div class="cs-footer-nav">
                            <div class="cs-logo">
                                <div class="cs-media">
                                    <figure>
                                        <a href="front_layout.blade.php"><img src="front_end/assets/images/footer-logo.png" alt="" /></a>
                                    </figure>
                                </div>
                            </div> 
                            <div class="footer-nav">
                            	<ul>
                                	<li><a href="#">About</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Affiliate Program</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Press Kit</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="copyright-text">
                            <p>© 2016 SmartStudy :  Best WordPress Theme Ever. All Rights Reserved.<a class="cs-color" href="#"> Chimp Group</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="cs-social-media">
                         	<ul>
                             	<li><a href="#"><i class="icon-facebook2"></i></a></li>
                                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                                <li><a href="#"><i class="icon-instagram2"></i></a></li>
                                <li><a href="#"><i class="icon-youtube3"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
	</footer>
	<!-- Footer End --> 
</div>
</div>
<script src={{asset("front_end/assets/scripts/responsive.menu.js")}}></script> <!-- Slick Nav js --> 
<script src={{asset("front_end/assets/scripts/chosen.select.js")}}></script> <!-- Chosen js --> 
<script src={{asset("front_end/assets/scripts/slick.js")}}></script> <!-- Slick Slider js --> 
<script src={{asset("front_end/assets/scripts/jquery.mCustomScrollbar.concat.min.js")}}></script> 
<script src={{asset("front_end/assets/scripts/jquery.mobile-menu.min.js")}}></script><!-- Side Menu js --> 
<script src={{asset("front_end/assets/scripts/counter.js")}}></script><!-- Counter js --> 

<!-- Put all Functions in functions.js --> 
<script src={{asset("front_end/assets/scripts/functions.js")}}></script>
</body>

<!-- Mirrored from chimpgroup.com/themeforest/smart-study/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Jul 2018 03:37:55 GMT -->
</html>