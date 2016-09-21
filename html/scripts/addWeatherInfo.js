var weatherData = [];
$.get('weatherData.txt', function(data) {
	weatherData = data.split("\n");
	var elem = document.createElement("img");
	elem.setAttribute("src", 'images/' + weatherData[0] + '/' + weatherData[1]);
	elem.setAttribute("height", "180");
	elem.setAttribute("width", "180");
	elem.setAttribute("alt", weatherData[1]);
	document.getElementById("weatherImg").appendChild(elem);

	document.getElementById("weatherTempValue").innerHTML = "<p class='weatherTitle' style='font-size: 30px;'>Temperatur</p><p class='weatherData' style='font-size: 35px;'>" + weatherData[2] + '°</p>';
	document.getElementById("weatherRainfall").innerHTML = "<p class='weatherTitle'>Nedbør</p><p class='weatherData'>" + weatherData[3] + '</p>';
	document.getElementById("weatherWind").innerHTML = "<p class='weatherTitle'>Vind</p><p class='weatherData'>" + weatherData[5] + '</p>';
	document.getElementById("weatherWindDirection").innerHTML = "<p class='weatherTitle'>Vind rettning</p><p class='weatherData'>" + weatherData[6] + '</p>';
});