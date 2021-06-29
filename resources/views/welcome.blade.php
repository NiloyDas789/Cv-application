<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Home</title>
<!-- Bootstrap stylesheet -->
<link href="{{asset('view')}}/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
<!-- font -->
<link href="{{asset('view')}}/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
<!-- stylesheet -->
<link href="{{asset('view')}}/css/style.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('view')}}/css/style_orange.css" title="style_orange" rel="alternate stylesheet" type="text/css"/>
<link href="{{asset('view')}}/css/style_blue.css" title="style_blue" rel="alternate stylesheet" type="text/css"/>
<link href="{{asset('view')}}/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('view')}}/css/ele-style.css" rel="stylesheet" type="text/css"/>
<!-- font-awesome -->
<link href="{{asset('view')}}/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- line-awesome -->
<link href="{{asset('view')}}/line-awesome/css/line-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- crousel css -->
<link href="{{asset('view')}}/js/owl-carousel/owl.carousel.min.css" rel="stylesheet" type="text/css" />
<!--bootstrap select-->
<link href="{{asset('view')}}/js/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<style>
.list-inline li {
    float:left;
    margin: 25px!important;
}
div a :{
    color:black
}

div a:hover :{
    color:red;
}
</style>

</head>
<body>
<!--top start here -->
{{-- <div class="top">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-xs-12">
				<ul class="list-inline icon">
					<li>
						<!--language code start here-->
						<form  method="post" enctype="multipart/form-data" id="language">
							<div class="btn-group">
								<button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
									<span class="text"><i class="la la-language"></i>English</span> <i class="la la-caret-down"></i>
								</button>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="javascript:;"><img src="{{asset('view')}}/images/flag.jpg" alt="english" title="english" /> English</a></li>
								</ul>
							</div>
						</form>
						<!--language code end here-->
					</li>
					<li><a href="login.html"><i class="la la-plus-square"></i> <span>Login</span></a></li>
					<li><a href="register.html"><i class="la la-key"></i> <span>Register</span></a></li>
				</ul>
			</div>
			<div class="col-md-7 col-sm-7 col-xs-12">
				<div class="topnav responsive" id="myTopnav">
					<ul class="list-inline">
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Home</a>
							<div class="dropdown-menu">
								<div class="dropdown-inner">
									<ul class="list-unstyled">
										<li><a href="index.html">Homepage</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li><a href="aboutus.html">About</a></li>
						<li class="dropdown" ><a data-toggle="dropdown" href="#">Blog</a>
							<div class="dropdown-menu">
								<div class="dropdown-inner">
									<ul class="list-unstyled">
										<li><a href="blog.html">Our Blog</a></li>
										<li><a href="blogdetail.html">Blog Detail</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li><a href="contactus.html">Contact</a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages</a>
							<div class="dropdown-menu">
								<div class="dropdown-inner">
									<ul class="list-unstyled">
										<li><a href="faq.html">FAQ</a></li>
										<li><a href="dashboard.html">Dashboard</a></li>
										<li><a href="price_plan.html">Pricing Plans</a></li>
										<li><a href="all_ads.html"> All Ads</a></li>
										<li><a href="ads_single_view.html">Ads Single View</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li><a href="terms_and_conditions.html">Term & Conditions</a></li>
						<li><a href="javascript:void(0);" class="icons" onclick="myFunction()">&#9776;</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div> --}}
<!--top end here -->

<!-- header start here-->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div id="logo">
					<a href="index.html"><img class="img-fluid logochange" src="{{asset('view')}}/images/project/logo-1.png" alt="logo" title="logo" /></a>
				</div>
			</div>

			{{-- <div class="col-md-7 col-sm-7 col-xs-12">
				<form class="form-horizontal category" method="post">
					<div class="row">
						<div class="col-sm-3 paddright">
							<div class="form-group">
								<select class="selectpicker form-control bs-select-hidden" name="location">
									<option value="1">Select City</option>
									<option value="0">Ludhiana</option>
									<option value="0">Jalandhar</option>
									<option value="0">Moga</option>
									<option value="0">Ambala</option>
									<option value="0">Amritsar</option>
									<option value="0">Delhi</option>
								</select>
							</div>
						</div>
						<div class="col-sm-3 paddright">
							<div class="form-group">
								<select class="selectpicker form-control bs-select-hidden" name="location">
									<option value="1">Select Category</option>
									<option value="0">Vehicle</option>
									<option value="0">Mobiles</option>
									<option value="0">Electonics</option>
									<option value="0">Real Estate</option>
									<option value="0">Fashion</option>
									<option value="0">Furniture</option>
									<option value="0">Jobs</option>
									<option value="0">Services</option>
									<option value="0">Pets</option>
									<option value="0">Education</option>
									<option value="0">Matrimony</option>
									<option value="0">Note and Coins</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6 search">
							<div class="form-group">
								<input name="s" value="" class="form-control" placeholder="Enter Keyword" type="text">
								<button type="submit" value="submit" class="btn"><i class="icon_search" aria-hidden="true"></i></button>
							</div>
						</div>
                    </div>
				</form>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-12 center">
				<button class="btn-primary btn-block" type="button" onclick="location.href='add_listing.html'"> <i class="la la-edit"></i>Add listing</button>
			</div> --}}
		</div>
	</div>
</header>
<!-- header end here -->

<!-- slider start here -->
<div class="slideshow owl-carousel">
	<div class="item">
		<img src="{{asset('view')}}/images/project/image003.jpg" alt="banner" title="banner" class="img-fluid sliderchange"/>
	</div>
	<div class="item">
		<img src="{{asset('view')}}/images/project/image002.jpg" alt="banner" title="banner" class="img-fluid sliderchange"/>
	</div>
	<div class="item">
		<img src="{{asset('view')}}/images/project/image001.jpg" alt="banner" title="banner" class="img-fluid sliderchange"/>
	</div>
</div>
<!-- slider end here -->

<!-- browse start here -->
<div class="browse">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>Browse Category</h2>
				<hr/>
				<ul class="list-inline">
					<li><a href="{{url('php')}}"><img src="{{asset('view')}}/images/project/php.jpg" alt="icon"  /><p>PHP Developer</p></a></li>
					<li><a href="{{url('reporter')}}"><img src="{{asset('view')}}/images/project/reporter.jpg" alt="icon"  /><p>Reporter</p></a></li>
					<li><a href="{{url('video')}}"><img src="{{asset('view')}}/images/project/video.jpg" alt="icon" /><p>Video Editor</p></a></li>
					<li><a href="{{url('recieptionist')}}"><img src="{{asset('view')}}/images/project/recieptionist.jpg" alt="icon" /><p>Recieptionist</p></a></li>


				</ul>
			</div>
		</div>

	</div>
</div>
<!-- browse end here -->


<!-- banner start here -->
{{-- <div class="banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<img src="{{asset('view')}}/images/ads.jpg" class="img-fluid bannerchange" alt="image" title="title"  />
			</div>
		</div>
	</div>
</div> --}}
<!-- banner end here -->

<!-- footer start here -->

<br><br>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 matter">
                <img src="{{asset('view')}}/images/project/logo-1.png" class="img-fluid logochange" alt="logo" title="logo" />


            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 info">
                <h5>Usefull Links</h5>
				<div>
                    <a href="https://ctgnews.com/" style="color:#343d46">ctgnews.com</a> <br>
                    <a href="http://ukbdnews.com/" style="color:#343d46">ukbdnews.com</a> <br>
                    <a href="https://dinerkhabor.com/" style="color:#343d46">dinerkhabor.com</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <h5>Contact with us</h5>
				<ul class="list-inline social">
                    <li><a href="https://www.facebook.com/ctgnews" target="_blank"><i class="fa fa-facebook"></i></a></li>

                    <li><a href="https://ctgnews.com/" target="_blank"><i class="social_googleplus" aria-hidden="true"></i></a></li>

					<li><a href="https://www.youtube.com/channel/UCPrZoSmFgDBPsH2CvAbuYog" target="_blank"><i class="social_youtube"></i></a></li>

                </ul>
            </div>
        </div>
    </div>
	<div class="powered">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-xs-12 text-center">
					<p>© 2017 <span>Ctgnews Job</span>. All rights reserved. </p>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- footer end here -->

<!-- jquery -->
<script src="{{asset('view')}}/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<!-- bootstrap js -->
<script src="{{asset('view')}}/js/popper.min.js" type="text/javascript"></script>
<script src="{{asset('view')}}/bootstrap4/js/bootstrap.min.js" type="text/javascript"></script>
<!--bootstrap select-->
<script src="{{asset('view')}}/js/dist/js/bootstrap-select.js"></script>
<!-- owlcarousel js -->
<script src="{{asset('view')}}/js/holder.min.js" type="text/javascript"></script>
<script src="{{asset('view')}}/js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<!--internal js-->
<script src="{{asset('view')}}/js/owlinternal.js"></script>
<script src="{{asset('view')}}/js/internal.js"></script>
{{-- <script src="{{asset('view')}}/js/switcher.js"></script> --}}



</body>
</html>
