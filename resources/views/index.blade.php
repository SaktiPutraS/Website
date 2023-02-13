<!doctype html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title>EDP</title>
	<meta name="description" content="BlackTie.co - Free Handsome Bootstrap Themes" />
	<meta name="keywords" content="themes, bootstrap, free, templates, bootstrap 3, freebie,">
	<meta property="og:title" content="">

	<link rel="stylesheet" type="text/css" href="{{asset('plugins/munter/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/munter/fancybox/jquery.fancybox-v=2.1.5.css')}}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{asset('plugins/munter/css/font-awesome.min.css')}}" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{asset('plugins/munter/css/style.css')}}">

	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext' rel='stylesheet' type='text/css'>


	<link rel="prefetch" href="{{asset('plugins/munter/images/zoom.png')}}">
    <style>
        #login > a, #dashboard > a{
            color: black !important;
        }
    </style>
</head>

<body>
	<div class="navbar navbar-fixed-top" data-activeslide="1">
		<div class="container">

			<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>


			<div class="nav-collapse collapse navbar-responsive-collapse">
				<ul class="nav row">
					<li data-slide="1" class="col-12 col-sm-2"><a id="menu-link-1" href="#slide-1" title="Next Section"><span class="icon icon-home"></span> <span class="text">Home</span></a></li>
					<li data-slide="2" class="col-12 col-sm-2"><a id="menu-link-2" href="#slide-2" title="Next Section"><span class="icon icon-user"></span> <span class="text">About Us</span></a></li>
					<li data-slide="4" class="col-12 col-sm-2"><a id="menu-link-4" href="#slide-4" title="Next Section"><span class="icon icon-gears"></span> <span class="text">Services</span></a></li>

                    @if (Route::has('login'))
                        @auth
                            <li id = "dashboard" class="col-12 col-sm-2"><a onClick="location='{{route('dashboard')}}'" href="#"title="Next Section"><span class="icon icon-envelope"></span> <span class="text">Dashboard</span></a></li>
                            @else
                            <li id = "login" class="col-12 col-sm-2"><a onClick="location='{{route('login')}}'" href="#"title="Next Section"><span class="icon icon-envelope"></span> <span class="text">Login</span></a></li>

                        @endauth
                @endif
				</ul>
				<div class="row">
					<div class="col-sm-2 active-menu"></div>
				</div>
			</div><!-- /.nav-collapse -->
		</div><!-- /.container -->
	</div><!-- /.navbar -->


	<!-- === Arrows === -->
	<div id="arrows">
		<div id="arrow-up" class="disabled"></div>
		<div id="arrow-down"></div>
		<div id="arrow-left" class="disabled visible-lg"></div>
		<div id="arrow-right" class="disabled visible-lg"></div>
	</div><!-- /.arrows -->


	<!-- === MAIN Background === -->
	<div class="slide story" id="slide-1" data-slide="1">
		<div class="container">
			<div id="home-row-1" class="row clearfix">
				<div class="col-12">
					<h1 class="font-semibold">PT. DUTA <span class="font-thin">FUJI ELECTRIC</span></h1>
				<!--	<h4 class="font-thin">We are an <span class="font-semibold">independent interactive agency</span> based in London.</h4>-->
					<br>
					<br>
				</div><!-- /col-12 -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide1 -->

	<!-- === Slide 2 === -->
	<div class="slide story" id="slide-2" data-slide="2">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin">Doing the best for <span class="font-semibold">Solving</span> your problems.</div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-12 font-thin">This is what <span class="font-semibold">we do best</span></div>
			</div><!-- /row -->
			<div class="row content-row">
				<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-eye-open"></i></p>
					<h2 class="font-thin">Problem <span class="font-semibold">Identity</span></h2>
					<h4 class="font-thin">Finding and Analyzing problems for the future problems.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-laptop"></i></p>
					<h2 class="font-thin">Hardware <span class="font-semibold"> Solving</span></h2>
					<h4 class="font-thin">Hardware troubleshooting so that it can be used like before.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-tablet"></i></p>
					<h2 class="font-thin">Software <span class="font-semibold">Solving</span></h2>
					<h4 class="font-thin">Software troubleshooting so that it can be used like before.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-pencil"></i></p>
					<h2 class="font-semibold">Maintenance</h2>
					<h4 class="font-thin">Scheduled maintenance for all office hardware to prevent accidents.</h4>
				</div><!-- /col12 -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide2 -->

	<!-- === SLide 3 - Portfolio -->


	<!-- === Slide 4 - Process === -->
	<div class="slide story" id="slide-4" data-slide="4">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin"> <span class="font-semibold">Services</span></div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-10 font-light">There are many services that we offers</div>
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
			<div class="row content-row">
				{{-- <div class="col-sm-1 hidden-sm">&nbsp;</div> --}}
				<div class="col-12 col-sm-3">
					<p><i class="icon icon-bolt"></i></p>
					<h2 class="font-thin"><span class="font-semibold" >Hardware Request</span><br>Form</h2>
					<h4 class="font-thin">This form will be used if you have a hardware request.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-3">
					<p><i class="icon icon-cog"></i></p>
					<h2 class="font-thin"><span class="font-semibold" >Hardware Fix</span><br>Form</h2>
					<h4 class="font-thin">This form will be used if you have a request for hardware repair.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-3">
					<p><i class="icon icon-cloud"></i></p>
					<h2 class="font-thin"><span class="font-semibold" >Software Request</span><br>Form</h2>
					<h4 class="font-thin">This form will be used if you have a software request.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-3">
					<p><i class="icon icon-map-marker"></i></p>
					<h2 class="font-thin"><span class="font-semibold" >Ink Request</span><br>Form</h2>
					<h4 class="font-thin">This form will be used if you have a ink request.</h4>
				</div><!-- /col12 -->
				{{-- <div class="col-12 col-sm-2">
					<p><i class="icon icon-gift"></i></p>
					<h2 class="font-thin">Delivering<br><span class="font-semibold">the product</span></h2>
					<h4 class="font-thin">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
				</div><!-- /col12 --> --}}
				{{-- <div class="col-sm-1 hidden-sm">&nbsp;</div> --}}
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide4 -->


</body>

	<!-- SCRIPTS -->
	<script src="{{asset('plugins/munter/js/html5shiv.js')}}"></script>
	<script src="{{asset('plugins/munter/js/jquery-1.10.2.min.js')}}"></script>
	<script src="{{asset('plugins/munter/js/jquery-migrate-1.2.1.min.js')}}"></script>
	<script src="{{asset('plugins/munter/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('plugins/munter/js/jquery.easing.1.3.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/munter/fancybox/jquery.fancybox.pack-v=2.1.5.js')}}"></script>
	<script src="{{asset('plugins/munter/js/script.js')}}"></script>

	<!-- fancybox init -->
	<script>
	$(document).ready(function(e) {
		var lis = $('.nav > li');
		menu_focus( lis[0], 1 );

		$(".fancybox").fancybox({
			padding: 10,
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
        // $(#login).click

	});
	</script>

</html>
