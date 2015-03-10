<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Hue for Humans</title>
		<meta name="description" content="An interface for the Philips Hue home lighting system" />
		<meta name="keywords" content="hue, philips hue, lights, smart lights" />
		<meta name="author" content="Matthew Sauter" />
		<!-- Bootstrap -->
		<script src="js/modernizr.custom.js"></script>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/jquery.fancybox.css" rel="stylesheet">
		<link href="css/flickity.css" rel="stylesheet" >
		<link href="css/animate.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
		<link href="css/styles.css" rel="stylesheet">
		<link href="css/queries.css" rel="stylesheet">
        <link rel="icon" href="img/hueman_favicon.ico">
        <!--Credit for the background image goes to: http://definitivegear.com/2014/10/21/hands-on-review-philips-hue-iris/ -->
		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<!-- open/close -->
		<header>
			<section class="hero">
				<div class="texture-overlay"></div>
				<div class="container">
					<div class="row nav-wrapper">
						<div class="col-md-6 col-sm-6 col-xs-6 text-left">
                            <h2>Hue for Humans</h2>
						</div>
					</div>
					<div class="row hero-content">
						<div class="col-md-12">
							<h1>Try the different light switches below.</h1>
						</div>
                    </div>
                    <div class="container">
                        <!-- Example row of columns -->
                        <div class="row">
                            <div class="col-md-4">
                                <h2>Matt's Room</h2>
                                </br>
                                <p><form action="light_switch.php" method="post">
                                    <button class="btn btn-default" name="light" value="on_3">Matt's Room On</button>
                                </form></br>
                                <form action="light_switch.php" method="post">
                                    <button class="btn btn-default" name="light" value="off_3">Matt's Room Off</button>
                                </form>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <h2>Living Room</h2>
                                </br>
                                <p><form action="light_switch.php" method="post">
                                    <button class="btn btn-default" name="light" value="on_1">Living Room On</button>
                                </form></br>
                                <form action="light_switch.php" method="post">
                                    <button class="btn btn-default" name="light" value="off_1">Living Room Off</button>
                                </form>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <h2>Master Bedroom</h2>
                                </br>
                                <p><form action="light_switch.php" method="post">
                                    <button class="btn btn-default" name="light" value="on_2">Master Bedroom On</button>
                                </form></br>
                                <form action="light_switch.php" method="post">
                                    <button class="btn btn-default" name="light" value="off_2">Master Bedroom Off</button>
                                </form>
                                </p>
                            </div>
                        </div>
                    </div>
                    </section>
                    </header>
                    <footer>
                    <div class="container">
				<div class="row">
					<div class="col-md-12" align="center">
						<h2 class="footer-logo">
                        Developed by msauter
						</h2>
					</div>
				</div>
			</div>
		</footer>
		<div class="overlay overlay-boxify">
			<nav>
				<ul>
					<li><a href="#about"><i class="fa fa-heart"></i>About</a></li>
					<li><a href="#features"><i class="fa fa-flash"></i>Features</a></li>
				</ul>
				<ul>
					<li><a href="#screenshots"><i class="fa fa-desktop"></i>Screenshots</a></li>
					<li><a href="#download"><i class="fa fa-download"></i>Download</a></li>
				</ul>
			</nav>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/min/toucheffects-min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/flickity.pkgd.min.js"></script>
		<script src="js/jquery.fancybox.pack.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/retina.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/min/scripts-min.js"></script>
	</body>
</html>
