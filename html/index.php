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
	<div class="col-md-2 col-sm-2 text-center">
		<div id="currTime"></div>
		<div id="showerthoughts">
			<h3>/r/showerthoughts</h3>
			<p>
				<?php echo file_get_contents("topSubPost.txt"); ?>
			</p>
		</div>
	</div>

	<div class="col-md-4 col-sm-4" id="timetables">
		<h4 id="calTitle"></h4>
		<img src="images/cal/Kevin.png" width="700px">
		<img src="images/cal/Elias.png" width="700px">
		<img src="images/cal/August.png" width="700px">
		<img src="images/cal/Nora.png" width="700px">
	</div>

	<div class="col-md-3 col-sm-3 text-center weatherReport" style="margin-top: -40px;">
		<div>
			<e id="weatherImg"></e>
		</div>
		<p id="weatherTempValue"></p>
		<p id="weatherRainfall"></p>
		<p id="weatherWind"></p>
		<p id="weatherWindDirection"></p>
	</div>

	<div class="clearfix"></div>

	<div class="col-md-2 col-sm-2">
		<h4 id="twitterTitle">@Politiet</h4>
		<div class="twitterFeed">
			<a class="twitter-timeline"
			  data-widget-id="685044306260918273"
			  href="https://twitter.com/TwitterDev"
			  data-chrome="nofooter noborders noheader transparent"
			  height="300">
			Tweets by @Pooooolis
			</a>
		</div>
	</div>

	<div class="col-md-3 col-sm-3">
		<h3 id="rssTitle">Siste fra ap.no</h3>
		<span id="rssFeed">
			<?php include 'phpFiles/apRss.php' ?>
		</span>
	</div>

	<div class="col-md-3 col-sm-3">
		<h3 id="rssTitle">Siste fra db.no</h3>
		<span id="rssFeed">
			<?php include 'phpFiles/dbRss.php' ?>
		</span>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
