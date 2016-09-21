var weekday = new Array(7);
	weekday[0]=  "Søndag";
	weekday[1] = "Mandag";
	weekday[2] = "Tirsdag";
	weekday[3] = "Onsdag";
	weekday[4] = "Torsdag";
	weekday[5] = "Fredag";
	weekday[6] = "Lørdag";

(function () {
    function checkTime(i) {
        return (i < 10) ? "0" + i : i;
    }

    function startTime() {
        var today = new Date(),
            h = checkTime(today.getHours()),
            m = checkTime(today.getMinutes()),
            s = checkTime(today.getSeconds());
            dn = weekday[today.getDay()];
            d = checkTime(today.getDate());
            mon = checkTime(today.getMonth() + 1);
            y = checkTime(today.getFullYear());
        document.getElementById('currTime').innerHTML = 
        	"<p id='time'>" + h + ":" + m + ":" + s + "</p><p>" + dn + " " + d + "." + mon + "." + y + "</p>";
        t = setTimeout(function () {
            startTime()
        }, 500);
    }
    startTime();
})();