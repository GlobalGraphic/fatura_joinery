<?php 
	set_include_path( __DIR__ );
	require 'config.php';
?>
<!Doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="sk" itemscope itemtype="http://schema.org/Product">
<!--<![endif]-->
<head>
<META http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<!-- Use the .htaccess and remove these lines to avoid edge case issues.
			 More info: h5bp.com/b/378 -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title></title>
<meta name="description" content="Fatura Stolárstvo Vám okrem 14 ročnej skúsenosti, záruky kvality, profesionality a serióznosti predkaldá túto ponuku: Eurookná , Vchodové dvere , Interiérové dvere , Schodištia , Záhradné altánky, prístrešky , Terasové podlahy , Obklady- podhľady , Sauny , Nábytok z masívu , Posuvné steny , Rolovacie steny , Okenice"/>
<meta name="keywords" content="fatura stolarstvo,stolarstvo gelnica,stolarstvo prakovce ,stolarstvo jaklovce,nabytok gelnica"/>
<meta name="author" content="humans.txt">
<meta name="robots" content="index, follow">
<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
<!-- Facebook Metadata /-->
<meta property="fb:page_id" content=""/>
<meta property="og:image" content=""/>
<meta property="og:description" content=""/>
<meta property="og:title" content=""/>
<!-- Google+ Metadata /-->
<meta itemprop="name" content="">
<meta itemprop="description" content="">
<meta itemprop="image" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/import.css">
<script src="js/libs/modernizr-2.6.2.min.js"></script>
<!--GOOGLE VERIFICATION added 03.06.2019-->
<meta name="google-site-verification" content="WglLOVi8sMo6KXde1TC4DXjR41XXlsNFiX993GkU49k" />
<script>
/*	console.log(window.navigator.language);


	function language (){
		if (window.navigator.language === "sk-SK") {
			console.log("language SK");//test
		}else if(window.navigator.language === "en") {
			console.log("language EN");//test
			alert("We detected that your language is English you will be redirected to English website!");
			window.location.href = "http://www.stolarstvofatura.sk/?lang=en"; 
		}else if (window.navigator.language === "de") {
			console.log("language DE");//test
			alert("Wir haben festgestellt, dass Ihre Sprache Deutsch ist. Sie werden auf die Deutsche Website weitergeleitet!");
			window.location.href = "http://www.stolarstvofatura.sk/?lang=de";
		}else {
			console.log("error with language");
		}
	}

	window.onload = function () {
		language();
	};
*/
</script>
</head>
<body class="top-header">
<!-- preloader / loading gif is located in ../img/ 
change background color in style.css -->
<div id="preloader">
	<div id="status">
		 &nbsp;
	</div>
</div>
<!-- Main content block - all page content -->
<div class="content custom-scroll">
	<!-- blocker active with active header -->
	<div class="blocker">
	</div>
	<!-- #scrollarea adds custom scrollbar for main content -->
	<div id="scrollarea">
		<!-- Navigation header -->
		<header class="top-main" gumby-fixed="top">
		<div class="row large">
			<!-- reponsive menu button / not visible on desktop
			<a class="toggle menu-btn" href="#" gumby-trigger=".site-nav"><i class="fa fa-bars"></i></a> -->
			<div class="three columns alpha">
				<!-- logo -->
				<div class="logo">
					<a href="/"><img src="img/main-logo.png" alt="logo"></a>
				</div>
			</div>
			<div class="nine columns">
				<!-- navigation -->
				<nav class="main-nav">
				<ul class="site-nav">
					<!-- li class active for active page link
					add gumby-trigger=#id to target drawer with child navigation / gumby-trigger will be used for mobile menu-->
					<li class="active"><a href="index.php"><?php echo $lang['home']?></a>
					
					</li>
					<li><a href="o_nas.php"><?php echo $lang['onas']?></a>
					
					</li>
					<li class="has-child"><a href="#"><?php echo $lang['sluzby']?></a>
					<ul id="pages-sub">
						<li><a href="eurookna.php"><?php echo $lang['eurookna']?></a></li>
						<li><a href="vchodove_dvere.php"><?php echo $lang['vchod_dvere']?></a></li>
						<li><a href="interierove_dvere.php"><?php echo $lang['inter_dvere']?></a></li>
						<li><a href="schodistia.php"><?php echo $lang['schodistia']?></a></li>
						<li><a href="altanky.php"><?php echo $lang['prist_alt']?></a></li>
						<li><a href="podlahy.php"><?php echo $lang['terasove_podlahy']?></a></li>
						<li><a href="obklady.php"><?php echo $lang['obklady']?></a></li>
						<li><a href="sauny.php"><?php echo $lang['sauny']?></a></li>
						<li><a href="nabytok.php"><?php echo $lang['nabytok_masiv']?></a></li>
						<li><a href="posuvne_steny.php"><?php echo $lang['posuvne_steny']?></a></li>
						<li><a href="rolovacie_steny.php"><?php echo $lang['rolovacie_steny']?></a></li>
						<li><a href="okenice.php"><?php echo $lang['okenice']?></a></li>
						

					</ul>
					</li>
					<li class="has-child"><a href="#"><?php echo $lang['realizacie']?></a>
					<ul id="work-sub">
						<li><a href="foto_eurookna.html"><?php echo $lang['eurookna']?></a></li>
						<li><a href="foto_vchodove_dvere.html"><?php echo $lang['vchod_dvere']?></a></li>
						<li><a href="foto_interierove_dvere.html"><?php echo $lang['inter_dvere']?></a></li>
						<li><a href="foto_schodistia.html"><?php echo $lang['schodistia']?></a></li>
						<li><a href="foto_altanky.html"><?php echo $lang['prist_alt']?></a></li>
						<li><a href="foto_podlahy.html"><?php echo $lang['terasove_podlahy']?><</a></li>
						<li><a href="foto_obklady.html"><?php echo $lang['obklady']?></a></li>
						<li><a href="foto_sauny.html"><?php echo $lang['sauny']?></a></li>
						<li><a href="foto_nabytok.html"><?php echo $lang['nabytok_masiv']?></a></li>
						
					</ul>
					</li>
					
					
					<li><a href="contact-alt.php"><?php echo $lang['kontakt']?></a></li>

					<li class="has-child"><a href="#"><?php echo $lang['jazyk']?></a>
					<ul id="pages-sub">
						<li><a href="?lang=sk"><?php echo $lang['slovensky']?></a></li>
						<li><a href="?lang=en"><?php echo $lang['ang']?></a></li>
						<li><a href="?lang=de"><?php echo $lang['nem']?></a></li>
					</ul>
					</li>

				</ul>
				<!-- icon-nav -->
				<ul class="nav-icon-list">
									</ul>
				</nav>
			</div>
		</div>
		</header>
		<!-- first block -->
		<div class="first-block">
		</div>
		<!-- superslides -->
		<section class="home-slider">
		<!-- begin home slideshow -->
		<div id="slides" class="home">
			<ul class="slides-container">
				<!-- first slide -->
				<li>
				<!-- slide background image -->
				<img src="img/home/1.jpg" alt="">
				<div class="black-tint">
				</div>
				<div class="slide-caption dark text-center">
					<!-- add class do-fade to apply fade animation on scroll -->
					<div class="row large do-fade">
						<h1 class="bold large-font"><?php echo $lang['vitajte1']?></h1>
						<!--<h2></h2>-->
						<div class=" midtoppadding">
							
						</div>
					</div>
				</div>
				</li>
				<!-- second slide -->
				<li>
				<!-- slide background image -->
				<img src="img/home/2.jpg" alt="">
				<div class="slide-caption dark">
					<!-- add class do-fade to apply fade animation on scroll -->
					<div class="row large text-center do-fade">
						<h2 class="block-heading"><?php echo $lang['skus']?></h2>
						<div class="eight columns centered">
							<!--<h2></h2>-->
							<div class="midtoppadding">
															</div>
						</div>
					</div>
				</div>
				</li>
				<!-- third slide -->
				<li>
					<!-- slide background image -->
					<img src="img/home/3.jpg" alt="">
					<div class="black-tint">
					</div>
					<div class="slide-caption dark">
						<!-- add class do-fade to apply fade animation on scroll -->
						<div class="row large text-center do-fade">
							<h2 class="block-heading"><?php echo $lang['motto']?></h2>
							<div class="eight columns centered">
								<!--<h2></h2>-->
								<div class="midtoppadding">
																	</div>
							</div>
						</div>
					</div>	
				</li>
				</ul>
				<!-- slideshow direction nav -->
				<nav class="slides-navigation">
				<a href="#" class="next"><i class="fa fa-chevron-right"></i></a>
				<a href="#" class="prev"><i class="fa fa-chevron-left"></i></a>
				</nav>
			</div>
			</section>
			<!-- home-slider -->
			<!-- section background color -->
			<div class="white">
				<!-- first section / info -->
				<section class="content-block">
				<div class="row content-heading text-center">
					<h6><?php echo $lang['vitajte']?></h6>
					<h3><?php echo $lang['']?></h3>
					<span class="border"></span>
				</div>
				<div class="row">
					<div class="ten columns centered text-center">
						<p class="intro">
							<?php echo $lang['intro1']?> 
						</p>
						<p class="intro">
							<?php echo $lang['intro2']?>
						</p>					
						<p class="intro">
							<span style="font-size: 16pt; text-decoration: underline"><?php echo $lang['vsetci']?></span>
						</p>
					</div>
				</div>
				</section>
				<!--second section / projects -->
				<section class="work">
				<!-- begin projects -->
				<ul class="grid times-four alt" id="projects">
					<!-- project -->
					<li class="grid-item">
					<div class="grid-project">
						<!-- project image -->
						<div class="img-box">
							<img src="img/album_home/okna.jpg" alt="project" class="zoom-on-hover">
						</div>
						<!-- view more link -->
						<a href="eurookna.html">
						<!-- project info -->
						<div class="project-info">
							<h2 class="grid-title"><?php echo $lang['euroBIG']?></h2>
							<h3 class="project-cat"><?php echo $lang['euro_tit']?></h3>
						</div>
						</a>
					</div>
					</li>
					<!-- project -->
					<li class="grid-item">
					<div class="grid-project">
						<!-- project image -->
						<div class="img-box">
							<img src="img/album_home/dvere.jpg" alt="project" class="zoom-on-hover">
						</div>
						<!-- view more link -->
						<a href="vchodove_dvere.html">
						<!-- project info -->
						<div class="project-info">
							<h2 class="grid-title"><?php echo $lang['vchodBIG']?></h2>
							<h3 class="project-cat"><?php echo $lang['vchod_tit']?></h3>
						</div>
						</a>
					</div>
					</li>
					<!-- project -->
					<li class="grid-item">
					<div class="grid-project">
						<!-- project image -->
						<div class="img-box">
							<img src="img/album_home/dvere_int.jpg" alt="project" class="zoom-on-hover">
						</div>
						<!-- view more link -->
						<a href="interierove_dvere.html">
						<!-- project info -->
						<div class="project-info">
							<h2 class="grid-title"><?php echo $lang['intBIG']?></h2>
							<h3 class="project-cat"><?php echo $lang['int_tit']?></h3>
						</div>
						</a>
					</div>
					</li>
					<!-- project -->
					<li class="grid-item">
					<div class="grid-project">
						<!-- project image -->
						<div class="img-box">
							<img src="img/album_home/schody.jpg" alt="project" class="zoom-on-hover">
						</div>
						<!-- view more link -->
						<a href="schodistia.html">
						<!-- project info -->
						<div class="project-info">
							<h2 class="grid-title"><?php echo $lang['schodBIG']?></h2>
							<h3 class="project-cat"><?php echo $lang['schod_tit']?></h3>
						</div>
						</a>
					</div>
					</li>
					<!-- project -->
					<li class="grid-item">
					<div class="grid-project">
						<!-- project image -->
						<div class="img-box">
							<img src="img/album_home/altanky.jpg" alt="project" class="zoom-on-hover">
						</div>
						<!-- view more link -->
						<a href="altanky.html">
						<!-- project info -->
						<div class="project-info">
							<h2 class="grid-title"><?php echo $lang['zahrBIG']?></h2>
							<h3 class="project-cat"><?php echo $lang['zahr_tit']?></h3>
						</div>
						</a>
					</div>
					</li>
					<!-- project -->
					<li class="grid-item">
					<div class="grid-project">
						<!-- project image -->
						<div class="img-box">
							<img src="img/album_home/podlahy.jpg" alt="project" class="zoom-on-hover">
						</div>
						<!-- view more link -->
						<a href="podlahy.html">
						<!-- project info -->
						<div class="project-info">
							<h2 class="grid-title"><?php echo $lang['terasBIG']?></h2>
							<h3 class="project-cat"><?php echo $lang['teras_tit']?></h3>
						</div>
						</a>
					</div>
					</li>
					<!-- project -->
					<li class="grid-item">
					<div class="grid-project">
						<!-- project image -->
						<div class="img-box">
							<img src="img/album_home/obklady.jpg" alt="project" class="zoom-on-hover">
						</div>
						<!-- view more link -->
						<a href="obklady.html">
						<!-- project info -->
						<div class="project-info">
							<h2 class="grid-title"><?php echo $lang['obkBIG']?></h2>
							<h3 class="project-cat"><?php echo $lang['obk_tit']?></h3>
						</div>
						</a>
					</div>
					</li>
					
					<!-- project -->
					<li class="grid-item">
					<div class="grid-project">
						<!-- project image -->
						<div class="img-box">
							<img src="img/album_home/sauna.jpg" alt="project" class="zoom-on-hover">
						</div>
						<!-- view more link -->
						<a href="sauny.html">
						<!-- project info -->
						<div class="project-info">
							<h2 class="grid-title"><?php echo $lang['saunyBIG']?></h2>
							<h3 class="project-cat"><?php echo $lang['sauny_tit']?></h3>
						</div>
						</a>
					</div>
					</li>
					<!-- project -->
					<li class="grid-item">
					<div class="grid-project">
						<!-- project image -->
						<div class="img-box">
							<img src="img/album_home/nabytok.jpg" alt="project" class="zoom-on-hover">
						</div>
						<!-- view more link -->
						<a href="nabytok.html">
						<!-- project info -->
						<div class="project-info">
							<h2 class="grid-title"><?php echo $lang['nabytokBIG']?></h2>
							<h3 class="project-cat"><?php echo $lang['nabytok_title']?></h3>
						</div>
						</a>
					</div>
					</li>
					<!-- project -->
					<li class="grid-item">
					<div class="grid-project">
						<!-- project image -->
						<div class="img-box">
							<img src="img/album_home/posuvne_steny.jpg" alt="project" class="zoom-on-hover">
						</div>
						<!-- view more link -->
						<a href="posuvne_steny.html">
						<!-- project info -->
						<div class="project-info">
							<h2 class="grid-title"><?php echo $lang['posuvBIG']?></h2>
							<h3 class="project-cat"><?php echo $lang['posuv_tit']?></h3>
						</div>
						</a>
					</div>
					</li>
					<!-- project -->
					<li class="grid-item">
					<div class="grid-project">
						<!-- project image -->
						<div class="img-box">
							<img src="img/album_home/rolovacie_steny.jpg" alt="project" class="zoom-on-hover">
						</div>
						<!-- view more link -->
						<a href="rolovacie_steny.html">
						<!-- project info -->
						<div class="project-info">
							<h2 class="grid-title"><?php echo $lang['rolBIG']?></h2>
							<h3 class="project-cat"><?php echo $lang['rol_tit']?></h3>
						</div>
						</a>
					</div>
					</li>
					<!-- project -->
					<li class="grid-item">
					<div class="grid-project">
						<!-- project image -->
						<div class="img-box">
							<img src="img/album_home/okenice.jpg" alt="project" class="zoom-on-hover">
						</div>
						<!-- view more link -->
						<a href="okenice.html">
						<!-- project info -->
						<div class="project-info">
							<h2 class="grid-title"><?php echo $lang['okeniceBIG']?></h2>
							<h3 class="project-cat"><?php echo $lang['okenice_tit']?></h3>
						</div>
						</a>
					</div>
					</li>


					
					
					
					
					
					
					
					
					

				</ul>
				<!-- clear floats -->
				<div class="clear">
				</div>
				</section>
				<!-- call to acton block -->
				<div class="action-block purple">
					<div class="row">
						<div class="twelve columns text-center">
							<h3 class="white-text">"<?php echo $lang['citat']?>"
							</h3>
							<h3 class="white-text">
							<a href="#" class="white line-button"><span>
							John D. Rockefeller</span></a>
							</h3>
						</div>
					</div>
				</div>
				
			
			<!-- twitter -->
			<div class="img-section" style="background-image:url(img/home/4.jpg);">
			<div class="content-block black-tint dark">
				<div class="row text-center">
					
					<div class="eight columns centered">
											</div>
					<!-- twitter username -->
									<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</div>
			</div>
			</div>
			<!-- widgetized footer -->
			<footer class="widget-ftr stripe-bg">
			<div class="content-block dark">
				<div class="row large midtoppadding">
				</div></div>
					
					
					
			</footer>
			<!-- site credit -->
			<footer id="colophon">
			<div class="row large">
				<div class="six columns">
					<p>
						 © VF Fatura stolárstvo 2015. All rights reserved - Design Kruger
					</p>
				</div>
				<div class="six columns">
					<!-- social network links -->
					<div class="text-right">
						<div class="social-icon">
							<ul class="social-icon-list">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
								<li><a href=""><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			</footer>
		</div>
		<!-- scrollarea -->
		<!-- search modal -->
		<div class="search-modal">
			<div class="search-field">
				<input class="search input" type="search" placeholder="Type search term here...">
			</div>
			<a class="remove-search"><i class="fa fa-times"></i></a>
		</div>
		
		<!--showreel modal -->
		<div class="video-modal" id="video-modal">
			<div class="youtube video">
			<!-- video source is added in ../js/main.js  under heading video modal -->
			</div>
			<a class="remove-video switch"><i class="fa fa-times"></i></a>
		</div>
		
		<!-- back to top button displays after 850px 
		vertical scroll value in ../js/main.js -->
		<div class="back-to-top">
			<a id="top-trigger">
			<i class="fa fa-angle-up"></i>
			</a>
		</div>
	</div>
	<!-- end div.content -->
<script src="js/libs/jquery-2.0.2.min.js"></script>
	<script src="js/libs/gumby.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
	<!-- twitter -->
	<script src="js/twitter.js"></script>
	<script>
	(function($) {
  "use strict";
		$('.tweet').tweet({
		username: "envato",
		modpath: '/twitter/',
		count: 1,
		loading_text: 'loading twitter feed...'
	});
	})(jQuery);
	
	
	</script>
	<!-- only include animate.js on 
	pages you want to use animations on
	<script src="js/animate.js"></script> -->
	<!-- Change UA-XXXXX-X to be your site's ID -->
	<!--<script>
	window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
	Modernizr.load({
	  load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
	});
	</script>-->
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	   chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->
	</div>
	</body>
	</html>