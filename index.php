<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link rel="stylesheet" type="text/css" href="css/modern-business.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <title>Moodlink</title>
    </head>
    <body>
        <!-- Navbar -->
        <?php include("component_navbar.php"); ?>
        <!-- End Navbar -->
        <!-- Header Video -->
        <header>
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
        </header>
        <!-- End Header Video -->
        <!-- Page Content -->
        <div class="container">
            <!-- Product Description -->
            <div>
                <h1 class="mt-4 mb-3">
                    Bipolink
                </h1>
                <p>
                    Bipolink est une solution numérique de suivi pour les patients atteints de troubles de l'humeur.
                    <br>
                    Elle utilise les fonctionnalités du smarthpone pour récolter des données sur le patient, tout en lui laissant la possibilité de renseigner des informations comme dans un journal de bord numérique.
                    <br>
                    Avec l'accord du patient, les informations pourront ensuite être partagées avec ses soignants de façon totalement sécurisée: médecin ou psychologue.
                </p>
            </div>
            <!-- End Product Description -->
            <!-- Call to Action -->
            <div class="row">
                <div class="col-md-8">
                    <img class="img-fluid" src="img/image_app_mobile.jpg" alt="">
                </div>
                <div class="col-md-4">
                    <br>
                    <br>
                    <br>
                    <br>
                    <h4 class="my-3 text-center">
                        Essayez maintenant Bipolink
                    </h4>
                    <a href="https://play.google.com/store">
                        <img src="img/google-play-badge.png" class="img-fluid">
                    </a>
                </div>
            </div>
            <!-- End Call to Action -->
            <!-- Mood Disorder -->
            <div>
                <h1 class="mt-4 mb-3">
                    Les troubles de l’humeur
                </h1>
                <p>
                    Le trouble de l'humeur est un groupe de diagnostics en provenance du système de classification du Manuel diagnostique et statistique des troubles mentaux dans lequel la thymie est principalement induite1. Ce groupe de diagnostics est référencé sous le terme de « trouble affectif de l'humeur » dans la Classification internationale des maladies (CIM-10).
                    <br>
                    Deux groupes de troubles de l'humeur sont largement reconnus ; cette division est basée sur le cas éventuel d'un patient ayant connu des épisodes maniaques ou hypomaniaques. Ainsi, il existe un bon nombre de troubles de l'humeur, deux étant plus répandus : la dépression (communément appelée dépression nerveuse ou dépression majeure) et le trouble bipolaire (anciennement connu sous le terme de psychose maniaco-dépressive), caractérisé par des périodes maniaques et hypomaniaques, et souvent doublé d'épisodes dépressifs.
                </p>
            </div>
            <br>
            <!-- End Mood Disorder-->
            <!-- Cards -->
            <div class="row">
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="img/image_patient.webp" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Les patients</a>
                            </h4>
                            <p class="card-text">
                                Pouvoir se monitorer soi-même, mieux connaître sa maladie. Etre alerté en cas de risque de faire un épisode maniaque ou dépressif. Pouvoir renseigner des informations et donc suivre.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="img/image_aidant.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Les aidants</a>
                            </h4>
                            <p class="card-text">
                                Savoir que son proche se suit, avec l'accord du patient.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="img/image_psychiatre.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Les psychiatres</a>
                            </h4>
                            <p class="card-text">
                                Pouvoir accéder à de nombreuses informations pertinentes dans la pathologie.
                                Faciliter le suivi des patients.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="img/image_psychologue.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Les psychologues</a>
                            </h4>
                            <p class="card-text">
                                Faciliter l'éducation thérapeutique.
                                Faciliter le suivi des patients.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Cards -->
        </div>
        <!-- End Page Content -->
        <!-- Footer -->
        <?php include("component_footer.php"); ?>
        <!-- End Footer -->
        <!-- Script Video -->
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
        <!-- End Script Video -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>