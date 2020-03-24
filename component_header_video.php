<!-- Header Video -->
<!-- HTML -->
<div id="videoHeader">
    <div class="overlay">
    </div>
    <video id="myVideo" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
    </video>
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
                <h1 class="display-3">
                    Bipolink
                </h1>
                <p class="lead mb-3">
                    Solution numérique de suivi pour les patients atteints de troubles de l'humeur
                </p>
                <button id="myBtn" class="btn btn-secondary" onclick="myFunction()">
                    Pause
                </button>
            </div>
        </div>
    </div>
</div>
<!-- JavaScript -->
<script>
    var video = document.getElementById("myVideo");
    var btn = document.getElementById("myBtn");
    function myFunction() {
        if (video.paused) {
            video.play();
            btn.innerHTML = "Pause";
        } else {
            video.pause();
            btn.innerHTML = "Play";
        }
    }
</script>