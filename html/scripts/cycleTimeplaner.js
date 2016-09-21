var imageIndex = 0;
changeBanner();
	function changeBanner(){
	    var img = [];

	    var timetableImages = document.getElementById('timetables');
		img[0] = timetableImages.getElementsByTagName('img')[0];
		img[1] = timetableImages.getElementsByTagName('img')[1];
		img[2] = timetableImages.getElementsByTagName('img')[2];

		for (var i = 0; i < img.length; i++) {
			img[i].style.display = 'none';
		}
		img[imageIndex].style.display = 'block';
		var src = img[imageIndex].src;

		if(src.indexOf('/') >= 0) {
		   src = src.substring(src.lastIndexOf('/')+1);
		   src = src.replace('.png', ' sin timeplan');
		   document.getElementById('calTitle').innerHTML = src;
		}

		if (imageIndex == img.length - 1) {
			imageIndex = 0;
		} else { imageIndex++; }
	}

	  setInterval('changeBanner()', 5000);