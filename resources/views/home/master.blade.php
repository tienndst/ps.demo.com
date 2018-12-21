<!DOCTYPE HTML>
<!-- BEGIN html -->
<html lang = "vi">
	<!-- BEGIN head -->
	<head>
		<title>@yield('title')</title> 
		<!-- Meta Tags -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
		<meta name="generator" content="nt7solution.com">
	    <meta property="fb:app_id" content="{{ (!empty($contact)?$contact->fb_app_id:"") }}" /> 
	    <meta property="og:type" content="article" /> 
	    <meta property="og:title" content="@yield('title')" />
	    <meta property="og:image" content="@yield('seo_image')" >
	    <meta property="og:description" content="@yield('seo_description')" >
	    <meta property="og:url" content="@yield('seo_url')" />
	    <meta property="og:site_name" content="{{ (!empty($contact)?$contact->seo_title:"") }}" />
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{url('public/home/images/favicon.png')}}" type="image/x-icon" />

		<!-- Stylesheets -->
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/reset.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/font-awesome.min.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/weather-icons.min.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/ps-style.css')}}" />
		<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Arvo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/bootstrap.min.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/dat-menu.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/main-stylesheet.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/ot-lightbox.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/shortcodes.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/responsive.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/mystyle.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/demo-settings.css')}}" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!-- Đặt thẻ này vào phần đầu hoặc ngay trước thẻ đóng phần nội dung của bạn. -->
		<script src="https://apis.google.com/js/platform.js" async defer>  {lang: 'vi'}</script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!--[if lte IE 8]>
		<link type="text/css" rel="stylesheet" href="css/ie-ancient.css" />
		<![endif]-->
	<!-- END head -->
	</head>

	<!-- BEGIN body -->
	<!-- <body> -->
	<body class="ot-menu-will-follow">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=1717807391847359";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<!-- Navbar responsive-->
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="wrapper">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>
						<a href="{{url('')}}"><img width="50px" src="{{ url('/public/ps_icon.png')}}" alt="No logo" /></a>
					</div>

					<!-- when active change action to  url('/search') -->
					<div class="collapse navbar-collapse" id="myNavbar">
						<form class="navbar-form navbar-left" action="{{ url('/')}}">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Tìm kiếm" name="key">
									<div class="input-group-btn">
										<button class="btn btn-default" type="submit">
											<i class="glyphicon glyphicon-search"></i>
										</button>
									</div>
							</div>
						</form>
						<ul class="nav navbar-nav navbar-right">
							<!-- when active change href to /register and /login -->
							<li><a href="/"><span class="glyphicon glyphicon-user"></span> Đăng kí</a></li>
							<li><a href="/"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
						</ul>
						<!-- when active clear class hive to show the wheather block -->
						<div class="hide load-responsive right header-main-weather wheather">
							<div class="weather-block">
								<i class="wi wi-day-lightning"></i>
								<strong>Hà Nội</strong>
								<span>+29&deg;C, Mưa dông</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Navbar responsive-->
		</nav>
		<!-- BEGIN .boxed -->
		<div class="boxed active ">
			<!-- BEGIN .header -->
			<header class="header">	
				<!-- BEGIN .wrapper -->
				<div class="wrapper">
					<!-- BEGIN .header-main -->
					<div class="header-main">
						<style type="text/css" media="screen">
							#top_text {
       								color: #00918e;
								    text-shadow: 1px 1px #00918e, 2px 2px #FF8040, 3px 3px #FF8040;
								    font: Bold 30px Sketch_Block;
								    -webkit-transition: all 0.12s ease-out;/*chrome & safari*/
								    -moz-transition:all 0.12s ease-out;/*firefox 3.7*/
								    -o-tramsition:all 0.12s ease-out /*Opera*/
								    }
 
									#top_text:hover {
									    position:relative; top:-3px; left:-3px;
									    text-shadow:1px 1px #FF8040, 2px 2px #FF8040, 3px 3px #FF8040, 4px 4px #FF8040, 5px 5px #FF8040, 6px 6px #FF8040 
									}
						</style>
					<!-- END .header-main -->
					</div>
					<nav class="main-menu">
						<!--@include('home.top_ads') -->
					</nav>
				<!-- END .wrapper -->
				</div>
			<!-- END .header -->
			</header>
			
			<!-- BEGIN .content -->
			<section class="content">
			@yield('content')				
			<!-- BEGIN .content -->
			</section>
			
			<!-- BEGIN .footer -->
			<footer class="footer">	
				<!-- BEGIN .footer-copyright -->
				<div class="footer-copyright">
					<!-- BEGIN .wrapper -->
					<div class="wrapper">
						<p>{!! $contact->slogan_intro !!}</p>					
						<p>&copy; Copyright <strong>{{$contact->nameco}}</strong> <?php echo date("Y"); ?>, <strong><a href="https://phungsu.vn" target="_blank">{{$contact->website}}</a></strong></p>
					
					<!-- END .wrapper -->
					</div>
				<!-- END .footer-copyright -->
				</div>
				
			<!-- END .footer -->
			</footer>
			<div class="back_top" style="display: none;">
				<a href="#top" class="right" style="color: #fff;"><i class="glyphicon glyphicon-arrow-up"></i><strong></strong></a>
			</div>			
		<!-- END .boxed -->
		</div>
	
		<!-- Scripts -->
		<script type="text/javascript" src="{{url('public/home/jscript/jquery-latest.min.js')}}"></script>
		<script type="text/javascript" src="{{url('public/home/jscript/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{url('public/home/jscript/modernizr.custom.50878.js')}}"></script>
		<script type="text/javascript" src="{{url('public/home/jscript/iscroll.js')}}"></script>
		<script type="text/javascript" src="{{url('public/home/jscript/dat-menu.js')}}"></script>
		<script type="text/javascript" src="{{url('public/home/jscript/theme-scripts.js')}}"></script>
		<script type="text/javascript" src="{{url('public/home/jscript/ot-lightbox.js')}}"></script>
		<script type="text/javascript" src="{{url('public/js/jquery.sticky-kit.min.js')}}"></script>
	<!-- END body -->
	<script>
		if ($(window).width() >700) {
        	$(".sticky_column").stick_in_parent();  
    	}
	</script>
	</body>
<!-- END html -->
</html>