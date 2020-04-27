<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Ondersteuningsnetwerk West is een multidisciplinair team van ondersteuners die klaar staat voor leerlingen met specifieke onderwijsbehoeften, hun leerkrachten en het schoolteam.">
    <script src="https://kit.fontawesome.com/dcc1e3a94c.js" crossorigin="anonymous"></script>
    <link id="links">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/gh/vaibhav111tandon/vov.css@latest/vov.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <?php include('contactform.php'); ?>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Contact || Ondersteuningsnetwerk West</title>
</head>
<body>
<!-- Navbar -->
<nav id="navMenu"></nav>
<main>
    <!-- CONTACT HEADER -->
    <header class="contact-header">
        <div class="overlay-contact">
            <div class="col-12 justify-content-center text-contact">
                <h1 class="display-2 vov zoom-in-left">Contact</h1>
            </div>
            <img src="img/contact.jpg" alt="">
        </div>
    </header>

    <!-- MIDDLE PARAGRAPH -->
    <section id="middle-par" class="text-center col-md-6 offset-md-3 mt-5">
        <h3 class="text-center mt-lg-5 mb-lg-4">Ons address</h3>
    </section>

    <!-- Google Map -->
    <section class="container-fluid m-0 p-0">
        <div id="map-container-google-4" class="z-depth-1-half map-container-4">
            <iframe width="600" height="450" frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?q=Pluimstraat%2022%2C%208600%20Diksmuide&key=AIzaSyC5YJh8iagHhuQ65-w-6KK8QWQbMXjNEKE"
                    allowfullscreen></iframe>
        </div>
    </section>
    <!-- Contact form -->
    <h3 class="mt-5 text-center">Contacteer ons</h3>
    <section id="contact" class="py-3">
        <div class="container">
            <div class="row">
                <aside class="col-md-4 col-lg-5 order-2">
                    <div id="bg-contact" class="card pt-4">
                        <div  class="card-body">
                            <h4 class="text-center pb-lg-3 font-weight-bold">Coördinatoren</h4>
                            <h4 class="font-italic">Eveline Pil</h4>
                            <p>Oostende – Gistel – Veurne – Westkust</p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i> 0483 29 80 48</p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> eveline.pil@netwerkwest.be</p>
                            <h4 class="font-italic mt-lg-5">Carmen Supeene</h4>
                            <p>Diksmuide – Ieper – Poperinge</p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i> 0468 48 02 56</p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> carmen.supeene@netwerkwest.be</p>
                        </div>
                    </div>
                </aside>
                <form method="post" name="emailfrom" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="col-md-8 col-lg-7">
                    <div class="card p-4 order-1">
                        <div class="card-body">
                            <h3 class="text-center">Stuur ons een berichtje</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" value="<?= $name ?>" placeholder="Naam*">
                                            <small class="text-danger"><?= $name_error ?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" value="<?= $mailFrom ?>" placeholder="E-mailadres*">
                                        <small class="text-danger"><?= $email_error ?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" value="<?= $phone ?>"
                                               placeholder="Telefoon (optioneel)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" value="<?= $subject ?>" placeholder="Onderwerp*">
                                        <small class="text-danger"><?= $subject_error ?></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-1">
                                    <div class="form-group">
                                        <textarea class="form-control" type="text" name="message" rows="6" placeholder="Bericht*" value="<?= $message ?>"
                                                  ></textarea>
                                        <div class="row">
                                            <div class="col-9">
                                                <small class="text-muted">* Veld vereist</small>
                                            </div>
                                            <div class="col-3">
                                                <small class="text-danger"><?= $message_error ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="Verstuur bericht"
                                               class="btn btn-outline-primary btn-block">
                                    </div>
                                    <?= $successMessage ?>
                                    <?= $failMessage ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<!-- FOOTER -->
<footer id="footer"></footer>
<script src="assets/js/script.js"></script>
<script src="assets/js/index.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
</script>
</body>
</html>

