<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">

    <title>Contact</title>
    <style>
    .jumbotron {width: 100%;height: 250px;}
        .jumbotron h2 {padding-bottom: 0;}
    </style>
</head>

<body>
    <header class="header bg">
        <div class="container text-white">
            <div class="row">
                <div class="col-sm-4 align-self-center text-left">
                    <h6>Simplon technologie</h6>
                </div>
                <div class="col-sm-4 col-12 align-self-center box-1 text-center">
                    <a class="navbar-brand" href="index.php"><img src="images/simplon.png" alt="logo"></a>
                </div>
                <div class="col-sm-4 align-self-center text-right">
                    <div class="social-icons">
                        <a href="https://fr-fr.facebook.com/ecoledescodeurs/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/simplon08?lang=fr"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://github.com/SimplonCharleville"><i class="fa fa-github" aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com/channel/UCTFYd2sOfjrJH1C421UyYuQ"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <!--/row-->
        </div>
        <!--container-->
    </header>
    <span class="position-absolute trigger"><!-- hidden trigger to apply 'stuck' styles --></span>
    <nav class="navbar navbar-expand-sm sticky-top navbar-dark">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar1">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="about.php">A propos</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio.php">Nouveautés</a>
                    </li>
                  <!--  <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>-->
                    <li class="nav-item active">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="contact.php">Support</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Articles</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--container end-->
    </nav>
    <!--Section-1-->
    <section class="section-1">
        <div class="jumbotron d-flex align-items-center">
            <div class="gradient"></div>
            <div class="container-fluid content">
                <h1 data-aos="fade-right" data-aos-delay="300">Bienvenue sur Simplon technologie</h1>
                <h2 data-aos="fade-left" data-aos-delay="300">Le site de référencement des dernières sorties</h2>
            </div>
            <!--container-fluid end-->
        </div>
    </section>

<!-- Contact section Start -->
<div id="contact">
  <div class="container">
  <h3>Nous contacter</h3>
  <div class="row" data-aos="fade-up" data-aos-delay="300">
      <div class="col-md-12 text-left">
          <p>Si vous souhaitez en savoir plus sur nos produits, avoir un avis perspicace sur votre setup, ou discuter car vous n'avez pas d'ami, contactez-nous via le formulaire ci-dessous, vous obtiendrez une réponse... peut-être.</p>
      </div>
  </div>
    </div>
     <div class="container py-5">
      <div class="row" data-aos="fade-up" data-aos-delay="300">
          <div class="col-md-12">
              <form>
                  <div class="form-group row">
                      <div class="col-sm-6">
                          <input type="text" class="form-control" placeholder="Nom (et prénom si vous voulez)" required>
                      </div>
                          <div class="col-sm-6">
                          <input type="text" class="form-control" placeholder="Email" required>
                      </div>
                      <div class="col-sm-12">
                          <input type="tel" class="form-control" placeholder="Numéro de téléphone(si vous voulez qu'on puisse le vendre)" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-md-12">
                          <textarea type="text" class="form-control" placeholder="Message constructif et compréhensible" rows="6" required></textarea>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-primary">C'est bon j'attend une réponse</button>
              </form>
          </div>
      </div>
     </div>
</div>

<!-- Contact section Ended -->

    <section class="section-7">
        <!-- Footer -->
      <?php include 'footer.php'; ?>
        <!-- Footer -->
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
