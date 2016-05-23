﻿<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex, nofollow, noarchive">
	<title>WebCam Effects</title>
	<meta name="viewport" content="user-scalable=no, width=device-width, minimum-scale=0.25, maximum-scale=1.0">
	<link rel="shortcut icon" href="assets/img/favicon.png" sizes="64x64">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Oxygen+Mono">
	<link rel="stylesheet" href="assets/css/style.css?noCache=<?php echo time(); ?>">
</head>
<body>
	<div class="webcam">
		<div id="js-canvas" class="canvas"></div>
		<video id="js-video" class="video"></video>
	</div>
	<div id="js-mask" class="mask">
		<div id="js-text" class="text">
			<h1>WebCam Effects <span>ver.0.4.1</span></h1>
			<p>Use your camera and microphone</p>
		</div>
	</div>
	<script src="assets/js/lib/jquery.min.js"></script>
	<script src="assets/js/vendor/dataarts/dat.gui.min.js"></script>
	<script src="assets/js/vendor/greensock/TweenMax.min.js"></script>
	<script src="assets/js/vendor/threejs/three.min.js"></script>
	<script src="assets/js/app.js?noCache=<?php echo time(); ?>"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-41890312-1', 'auto');
		ga('send', 'pageview');
	</script>
</body>
</html>