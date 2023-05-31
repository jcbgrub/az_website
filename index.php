<!DOCTYPE html>
<html>
<head>
	<title>Under Construction</title>
	<style type="text/css">
		body {
			margin: 0;
			padding: 0;
			background-color: #000;
		}
		#video-background {
			position: fixed;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			overflow: hidden;
			z-index: -100;
		}
		#video-foreground {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			pointer-events: none;
		}
		.banner {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background-color: #000;
			color: #fff;
			padding: 20px;
			font-size: 36px;
			font-weight: bold;
			text-align: center;
		}
	</style>
</head>
<body>
	<div id="video-background">
		<iframe id="video-foreground" src="https://www.youtube.com/embed/ubFq-wV3Eic?autoplay=1&loop=1&playlist=ubFq-wV3Eic" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="banner">
		Under Construction
	</div>
</body>
</html>

