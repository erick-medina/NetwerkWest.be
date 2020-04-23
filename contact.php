<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/dcc1e3a94c.js" crossorigin="anonymous"></script>
    <link id="links">
    <?php include('contactform.php'); ?>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Contact || Ondersteuningsnetwerk West</title>
</head>
<body>
<!-- Navbar -->
<nav id="navMenu"></nav>
<main>
    <!-- CONTACT HEADER -->
    <header id="contact-header">
        <div class="dark-overlay">
            <div class="contact-inner container">
                <div class="row">
                    <div class="col-md-6 m-auto text-center">
                        <h1 class="display-4">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- MIDDLE PARAGRAPH -->
    <section id="middle-par" class="text-center col-md-6 offset-md-3 mt-5">
        <p class="text-center vov shake-vertical">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda iste nemo praesentium
            recusandae. Accusantium, adipisci consectetur expedita incidunt magni modi nihil officiis suscipit tempora
            tempore. Aperiam culpa ipsum iste quas..</p>
    </section>

    <!-- Google Map -->
    <h3 class="text-center mt-lg-5 mb-lg-4">Ons address</h3>
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
                    <div id="bg-contact" class="card p-4">
                        <div  class="card-body">
                            <h4 class="text-center pb-lg-3">Coördinatoren</h4>
                            <h4>Eveline Pil</h4>
                            <p>Oostende – Gistel – Veurne – Westkust</p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i> 0483 29 80 48</p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> eveline.pil@netwerkwest.be</p>
                            <h4 class="mt-4">Carmen Supeene</h4>
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
                                        <input type="text" name="name" class="form-control" value="<?= $name ?>" placeholder="Naam*" autofocus>
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
                                                <small class="text-muted">* Required field</small>
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

