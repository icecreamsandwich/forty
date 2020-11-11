<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Forty by HTML5 UP</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
</head>
<?php
wp_head();
?>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<a href="index.html" class="logo"><strong>Forty</strong> <span>by HTML5 UP</span></a>
			<nav>
				<a href="#menu">Menu</a>
			</nav>
		</header>

		<!-- Menu -->
		<!-- <nav id="menu">
            <ul class="links">
                <li><a href="index.html">Home</a></li>
                <li><a href="landing.html">Landing</a></li>
                <li><a href="generic.html">Generic</a></li>
                <li><a href="elements.html">Elements</a></li>
            </ul>
            <ul class="actions stacked">
                <li><a href="#" class="button primary fit">Get Started</a></li>
                <li><a href="#" class="button fit">Log In</a></li>
            </ul>
        </nav>
 -->
		<nav id="menu">
			<?php
			wp_nav_menu(
				array(
					'menu' => 'menu-1',
					'container' => '',
					'theme_location' => 'menu-1',
					'items_wrap' => '<ul class="links" id="">%3$s</ul>'
				)
			)
			?>
			<ul class="actions stacked">
                <li><a href="#" class="button primary fit">Get Started</a></li>
                <li><a href="#" class="button fit">Log In</a></li>
            </ul>
		</nav>