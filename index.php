<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="300">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>RPi Home Hub v0.1</title>
</head>
<body>
	<div class="col-md-4 col-sm-5 text-center" id="currTime"></div>
	<div class="col-md-5 col-sm-5" id="showerthoughts" style="height: 225px;">
		<h3>/r/showerthoughts</h3>
		<p id="shower_body" style="overflow: hidden;">
			<?php echo file_get_contents("topSubPost.txt"); ?>
		</p>
	</div>x

	<div class="col-md-3 col-sm-3 text-center weatherReport" style="margin-top: -40px;">
		<div>
			<e id="weatherImg"></e>
		</div>
		<p id="weatherTempValue"></p>
		<p id="weatherRainfall"></p>
	</div>

	<div class="col-md-12 col-sm-12" id="timetables">
		<h4 id="calTitle"></h4>
		<img src="images/Kevin.png" width="800px">
		<img src="images/Elias.png" width="800px">
		<img src="images/August.png" width="800px">
		<img src="images/Nora.png" width="800px">
	</div>

	<div class="clearfix"></div>

	<div class="col-md-4 col-sm-4">
		<h4 id="twitterTitle">@Politiet</h4>
		<div class="twitterFeed">
			<a class="twitter-timeline"
			  data-widget-id="685044306260918273"
			  href="https://twitter.com/TwitterDev"
			  data-chrome="nofooter noborders noheader transparent"
			  height="400">
			Tweets by @Politiet
			</a>
		</div>
	</div>
<!--
	<div class="col-md-8 col sm-8">
		<div class="col-md-6 col-sm-6" style="height: 200px;">
			<h3 id="rssTitle">Siste fra ap.no</h3>
			<span id="rssFeed">
				<?php include 'phpFiles/apRss.php' ?>
			</span>
		</div>

		<div class="col-md-6 col-sm-6" style="height: 400px;">
			<h3 id="rssTitle">Siste fra db.no</h3>
			<span id="rssFeed">
				<?php include 'phpFiles/dbRss.php' ?>
			</span>
		</div>
		<div class="col-offset-md-6 col-md-6 col-offset-sm-6 col-sm-6">
			<iframe width="1280" height="720" src="https://www.youtube.com/embed/Gy5PC5Auoak?rel=0&amp;controls=0&amp;showinfo=0;autoplay=1" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
-->
	<div class="col-md-8 col-sm-8">
		<iframe width="680" height="385" src="https://www.youtube.com/embed/UdmHHpAsMVw?rel=0&amp;controls=0&amp;showinfo=0;autoplay=1" frameborder="0" allowfullscreen></iframe>
	</div>
	<script>window.twttr = (function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0],
		    t = window.twttr || {};
		  if (d.getElementById(id)) return t;
		  js = d.createElement(s);
		  js.id = id;
		  js.src = "https://platform.twitter.com/widgets.js";
		  fjs.parentNode.insertBefore(js, fjs);
		 
		  t._e = [];
		  t.ready = function(f) {
		    t._e.push(f);
		  };
		 
		  return t;
		}(document, "script", "twitter-wjs"));</script>

	<script src="scripts/timeDateDisplay.js"></script>
	<script src="scripts/cycleTimeplaner.js"></script>
	<script src="scripts/3minReload.js"></script>
	<script src="scripts/addWeatherInfo.js"></script>
	<script src="scripts/textFill.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>

