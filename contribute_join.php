<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("component_head.php"); ?>
        <title>Moodlink - Nous rejoindre</title>
    </head>
    <body>
        <?php include("component_header.php"); ?>
        <?php include("component_banner.php"); ?>
        <!-- Page Content -->
        <!-- Contact Form -->
        <section class="about py-5 mx-3">
            <div class="container py-md-3">
                <h2 class="heading text-center mb-sm-5 mb-4">
                    Contact
                </h2>
                <h4 class="about-left">
                    Vous voulez prendre part à l'aventure ?
                </h4>
                <p class="my-sm-4 my-3">
                    Nous sommes à la recherche de profil technique etc.
                </p>
                <div class="row agileinfo_mail_grids">
                    <div class="col-lg-12 agileinfo_mail_grid_right">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 wthree_contact_left_grid pr-md-0">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nom" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 wthree_contact_left_grid">
                                    <div class="form-group">
                                        <input type="text" name="phone number" class="form-control" placeholder="Téléphone" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" placeholder="Sujet" required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message" class="form-control" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="submit-buttons">
                                        <button type="submit" class="btn">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- //contact -->
        <!-- // Page Content -->
        <?php include("component_footer.php"); ?>
        <?php include("component_script.php"); ?>
    </body>
</html>