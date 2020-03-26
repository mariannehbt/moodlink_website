<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- For Mobile Apps, perturbe le fonctionnement des ancres -->
<!-- <script>
	addEventListener("load", function () {
		setTimeout(hideURLbar, 0);
	}, false);
	function hideURLbar() {
		window.scrollTo(0, 1);
	}
</script> -->
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a9a0734588.js" crossorigin="anonymous"></script>
<!-- Header Video -->
<script>
	// Get the video
	var video = document.getElementById("myHeaderVideo");

	// Get the button
	var btn = document.getElementById("myHeaderVideoBtn");

	// Pause and play the video, and change the button text
	function myHeaderVideoFunction() {
	  if (video.paused) {
	    video.play();
	    btn.innerHTML = "Pause";
	  } else {
	    video.pause();
	    btn.innerHTML = "Play";
	  }
	}
</script>
<!-- Scroll To Top Button -->
<script>
	//Get the button:
	mybutton = document.getElementById("myTopBtnFunctionBtn");

	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		} else {
			mybutton.style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function myTopBtnFunction() {
		document.body.scrollTop = 0; // For Safari
		document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
	}
</script>