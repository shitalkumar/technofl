<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Technoflair Lab <?php if($file != ''){echo '| '.$file;} else {echo '';}?></title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/flexdropdown.css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/flexdropdown.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />
	
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
</head>
<body>
	<!-- wraper -->
	<div id="wrapper">
		<!-- shell -->
		<div class="shell">
			<!-- container -->
			<div class="container">
				<!-- header -->
				<header id="header">
					<h1 id="logo"><a href="#">Technoflair Lab</a></h1>
					<!-- search -->
					<div class="search">
						<form method="post">
							<span class="field"><input type="text" class="field" value="keywords here ..." title="keywords here ..." /></span>
							<input type="submit" class="search-btn" value="" />
						</form>
					</div>
					<!-- end of search -->
				</header>
				<!-- end of header -->
				<!-- navigation -->
				<nav id="navigation">
					<a href="index.php" class="nav-btn"><span style="color:#6FA632">HOME</span><span class="arr"></span></a>
					<ul>
						<li class="active"><a href="index.php"><span style="color:#6FA632">HOME</span></a></li>
						<li class="active"><a href="main.php?f=about" data-flexmenu="flexmenu1"><span style="color:#6FA632">ABOUT</span></a></li>
						<li><a href="main.php?f=elab" data-flexmenu="flexmenu2"><span style="color:red">E</span>-<span style="color:#6FA632">LAB</span></a></li>
						<li><a href="main.php?f=etech" data-flexmenu="flexmenu3"><span style="color:red">E</span>-<span style="color:#6FA632">Technologies</span></a></li>
						<li><a href="main.php?f=elabo" data-flexmenu="flexmenu4"><span style="color:red">E</span>-<span style="color:#6FA632">Laboratory</span></a></li>
						<li><a href="main.php?f=econsult" data-flexmenu="flexmenu5"><span style="color:red">E</span>-<span style="color:#6FA632">Consulting</span></a></li>
						<li><a href="main.php?f=iconn" data-flexmenu="flexmenu6"><span style="color:red">I</span>-<span style="color:#6FA632">Connect</span></a></li>
					</ul>
					<ul id="flexmenu1" class="flexdropdownmenu">
						<li><a href="main.php?f=what_we_do">What we do?</a></li>
						<li><a href="main.php?f=how_we_do">How we do?</a></li>
						<li><a href="main.php?f=who_we_are">Who we are?</a></li>
					</ul>

					<ul id="flexmenu2" class="flexdropdownmenu">
						<li><a href="main.php?f=research_development">Research & Development</a>
							<ul>
							<li><a href="main.php?f=innovation">Innovation</a>
								<ul>
								<li><a href="main.php?f=about_ideas">Team - Passionate about ideas</a></li>
								<li><a href="main.php?f=helping_to_build_business">Helping to build business</a></li>
								</ul>
							</li>
							<li><a href="main.php?f=solution_for_you">Solution for you</a></li>
							</ul>
						</li>
						<li><a href="main.php?f=e_recovery">e-Recovery</a>
							<ul>
							<li><a href="main.php?f=data">Data</a>
								<ul>
								<li><a href="main.php?f=recover_your_disk_data">Recover your Hard Disk data</a></li>
								<li><a href="main.php?f=recover_your_laptop">Recover your laptop OS</a></li>
								</ul>
							</li>
							</ul>
						</li>
					</ul>
					<ul id="flexmenu3" class="flexdropdownmenu">
						<li><a href="main.php?f=business_intelligence">Business Intelligence</a>
							<ul>
							<li><a href="main.php?f=ibm_cognos">IBM Cognos</a>
								<ul>
								<li><a href="main.php?f=dashboarding">Dashboarding</a></li>
								<li><a href="main.php?f=mobility">Mobility</a></li>
								</ul>
							</li>
							<li><a href="main.php?f=roambi">ROAMBI</a></li>
							<li><a href="main.php?f=qlik_view">Qlik View</a></li>
							<li><a href="main.php?f=tm1">TM1</a></li>
							</ul>
						</li>
						<li><a href="main.php?f=cloud_computing">Cloud Computing</a></li>
						<li><a href="main.php?f=infrastructure_services">Infrastructure Services</a>
							<ul>
							<li><a href="main.php?f=platform_designing">Platform Designing</a></li>
							<li><a href="main.php?f=virtualization">Virtualization</a></li>
							</ul>
						</li>
					</ul>
					<ul id="flexmenu4" class="flexdropdownmenu">
						<li><a href="main.php?f=order_now">Order Now!-CBT</a></li>
						<li><a href="main.php?f=online_training">Online Training</a></li>
						<li><a href="main.php?f=career_counselling">Career Counselling</a></li>
					</ul>
					<ul id="flexmenu5" class="flexdropdownmenu">
						<li><a href="main.php?f=business_consulting">Business Consulting</a></li>
						<li><a href="main.php?f=it_consulting">IT Consulting</a>
							<ul>
								<li><a href="main.php?f=manage_support_services">Manage Support Services</a></li>
								<li><a href="main.php?f=staff_augmentation">Staff augmentation</a></li>
							</ul>
						</li>
						<li><a href="main.php?f=product_consulting">Product Consulting</a></li>
					</ul>
					<ul id="flexmenu6" class="flexdropdownmenu">
						<li><a href="main.php?f=worldwide">Worldwide</a></li>
						<li><a href="main.php?f=references">References</a></li>
					</ul>

				</nav>
				<!-- end of navigation -->
				<!-- slider -->
				<div class="m-slider">
					<div class="slider-holder">
						<span class="slider-shadow"></span>
						<span class="slider-b"></span>
						<div class="slider flexslider">
							<ul class="slides">
								<li>
									<div class="img-holder">
										<img src="css/images/slide-img1.png" alt="" />
									</div>
									<div class="slide-cnt">
										<h2>E-Technologies</h2>
										<div class="box-cnt">
											<p> Educational Technology relies on a broad definition of the word "technology." Technology can refer to material objects of use to humanity, such as machines or hardware, but it can also encompass broader themes, including systems, methods of organization, and techniques. So we provide a better system, best methods and better techniques.</p>
										</div>
									</div>
								</li>
								<li>
									<div class="img-holder">
										<img src="css/images/slide-img2.png" alt="" />
									</div>
									<div class="slide-cnt">
										<h2>E-Laboratory</h2>
										<div class="box-cnt">
											<p>We provide E-Laboratory for training purposes. We provide customized <strong>"Online Classroom"</strong> training as per the individuals capability targeting <strong>"Immediate Job"</strong> for him in IT Sector. We provide innovative lerner focused training solutions, Our online trainings are a low cost alternative to classroom training and is a perfact solution for individuals.</p>
										</div>
									</div>
								</li>
								<li>
									<div class="img-holder">
										<img src="css/images/slide-img1.png" alt="" />
									</div>
									<div class="slide-cnt">
										<h2>E-Consulting</h2>
										<div class="box-cnt">
											<p>We are business consultant, IT Consultant(Manage Support Services, Staff augmentation) and product consultant.</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>		
				<!-- end of slider -->
				<!-- main -->
				<div class="main">