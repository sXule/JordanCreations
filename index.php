<!doctype html>
<html lang="en" ng-app="jcApp">
<head>
	<title>JordanCreations</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<link rel="stylesheet" type="text/css" href="reset.css"/>
	
	<link rel="stylesheet" type="text/css" href="style.css" media="screen, handheld"/>
	<link rel="stylesheet" type="text/css" href="enhanced.css" media="screen and (min-width: 40.5em)"/>
	<!--[if (lt IE 9)&(!IEMobile)]>
	<link rel="stylesheet" type="text/css" href="enhanced.css"/>
	<![endif]-->
	
	<script src="angular.min.js"></script>
    <script src="angular-route.min.js"></script>
    <script src="controllers.js"></script>
    <script src="app.js"></script>
</head>
<body ng-controller="mainCtrl">

<div id="wrapper-div">
	<div id="mobile-nav" ng-show="mobile_menu" ng-click="hideMenu()">
		<ul>
			<li><a href="#home">News</a></li>
			<li><a href="#blog">Blog</a></li>
			<li><a href="#photo">Photo</a></li>
			<li><a href="#contact">Contact</a></li>
			<li><a href="#about">About</a></li>
		</ul>
	</div>
	
    <div id="top-div">
    </div>
    
    <div id="head-div">
        <img src="images/logo.gif"/>
    </div>
    
    <div id="separator-div">
        <div class="outer-center">
            <div class="inner-center">
                <div id="nav-div">
					<div id="mobile-menu-button" ng-click="showMenu()"></div>
                    <ul ng-controller="navCtrl">
                        <li ng-class="navClass('home')"><a href="#home">News</a></li>
                        <li ng-class="navClass('blog')"><a href="#blog">Blog</a></li>
                        <li ng-class="navClass('photo')"><a href="#photo">Photo</a></li>
                        <li ng-class="navClass('contact')"><a href="#contact">Contact</a></li>
                        <li ng-class="navClass('about')"><a href="#about">About</a></li>
                    </ul>
                </div><!--end #nav-div -->
            </div><!--end .inner-center -->
        </div><!--end .outer-center -->
        <div class="clear"></div>
    </div><!--end #separator-div -->
    
    <!-- Main view -->
	<div id="main-div" ng-view></div>
    
    <!-- Footer -->
    <div id="footer-div">
        <p>&copy;Copyright 2014 by Justin Jordan</p>
    </div><!--end #footer-div -->
</div><!--end #wrapper-div -->
    
</body>
</html>
