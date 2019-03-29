<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/slider.css">

    <title>Index</title>
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
                    <li class="nav-item active">
                        <a class="nav-link active" href="index.php">Accueil</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="about.php">A propos</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio.php">Nouveautés</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>-->
                    <li class="nav-item">
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
                <h1 data-aos="fade-up" data-aos-delay="100">Bienvenue chez Simplon technologie</h1>
                <h2 data-aos="fade-up" data-aos-delay="300">le site de référencement des nouvelles technologies</h2>
                <h4 data-aos="fade-up" data-aos-delay="500">Nous vous souhaitons une bonne visite</h4>

            </div>
            <!--container-fluid end-->
        </div>
    </section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">

        <div class="slider">
                              <video  autoplay nocontrols loop>
                                <source src="http://iwantfishing.com/images/vid.mp4" type="video/mp4">

                              </video>


            <!-- Slider de presentation de matériel informatique-->

            <div class="presentation-carousel">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" >

                    <!--Indicateur du slider-->

                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                        <li data-target="#carouselExampleFade" data-slide-to="2"></li>
                        <li data-target="#carouselExampleFade" data-slide-to="3"></li>
                    </ol>

                    <!--Slider avec indicateur d'image-->

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                             <img src="images/ecran.png "  width="460" height="450" alt="ecran-pc">
                            <div class="carousel-caption">
                               <a href="portfolio.php"> <h4 class="title">Ecran PC</h4></a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/mixstockage.png"  width="460" height="450" alt-="stockage">
                            <div class="carousel-caption">
                                <a href="portfolio.php"><h4 class="title">UNITE DE STOCKAGE</h4></a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/processeur.png"  width="460" height="450" alt="processeur">
                            <div class="carousel-caption">
                                <a href="portfolio.php"><h4 class="title">PROCESSEUR</h4></a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/cartemerememoire.png"  width="460" height="450" alt="carte-mere-memoire">
                            <div class="carousel-caption">
                                <a href="portfolio.php"><h4 class="title">CARTE MERE ET MEMOIRE</h4></a>
                            </div>
                        </div>
                    </div>

                    <!--Controle du slider-->

                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                 </div>
                 </div>
            </div>
        </div>

      </div> <!-- fin col-->
      </div> <!--fin row-->
      </div> <!-- fin container fluid-->
    <!--nouveauté-->
    <section class="section-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-8">
                    <h3>Découvrez les prochaines sorties hardware...</span></h3>
                </div>
                <div class="col-lg-5 col-sm-4">
                    <a href="portfolio.php" class="btn btn-success">Voir tout</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row" data-aos="fade-up" data-aos-delay="300">
                <a href="blog_single.php"
                    class="col-sm-3 box">
                    <img src="images/processeur-amd.jpg" class="img-fluid">
                    <div class="overlay">
                        <img src="images/plus-img.png" alt="plus-icon">
                        <div class="inner-text">
                            <h4>AMD Ryzen</h4>
                        </div>
                    </div>
                </a>
                <a href="blog_single.php"
                    class="col-sm-3 box">
                    <img src="images/ecran-asus.jpeg" class="img-fluid">
                    <div class="overlay">
                        <img src="images/plus-img.png" alt="plus-icon">
                        <div class="inner-text">
                            <h4>Ecran Asus</h4>
                        </div>
                    </div>
                </a>
                <a href="blog_single.php"
                    class="col-sm-3 box">
                    <img src="images/cartes-graphiques-Asus.jpg" class="img-fluid">
                    <div class="overlay">
                        <img src="images/plus-img.png" alt="plus-icon">
                        <div class="inner-text">
                            <h4>Carte graphique Asus</h4>
                        </div>
                    </div>
                </a>
                <a href="blog_single.php"
                    class="col-sm-3 box">
                    <img src="images/processeur-intel.jpg" class="img-fluid">
                    <div class="overlay">
                        <img src="images/plus-img.png" alt="plus-icon">
                        <div class="inner-text">
                            <h4>Intel Core i9</h4>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </section>


    <section class="section-4">
        <div class="container">
            <div class="row heading">
                <div class="col-sm-6 col-12">
                    <h3>Lisez nos articles<span>Nous décrivons beaucoup de produits</span></h3>
                </div>
                <div class="col-sm-6 col-12">
                    <a href="blog.php" class="btn btn-success">Voir l'intégralité des articles</a>
                </div>
            </div>
            <!--/row-->
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-12 box-1"  data-aos="fade-right" data-aos-delay="300">
                    <figure class="figure">
                        <a href="blog.php"><img src="images/tour-pc.jpg" class="figure-img img-fluid" alt="blog"></a>
                        <figcaption class="figure-caption">
                            <h2><a href="blog.php">PC gamer</a></h2>
                            <p>Disposant des dernières technologies permettant l'utilisation stable, rapide et efficace de jeux derniers cri tels que pong en 4K</p>
                            <a href="blog_single.php" class="btn btn-success">+ info</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-8 col-sm-12 col-12" data-aos="fade-left" data-aos-delay="300">
                    <div class="row" >
                        <div class="col-sm-6 col-12 box-2">
                            <figure class="figure">
                                <a href="blog.php"><img src="images/processeur-intel.jpg" class="figure-img img-fluid" alt="blog"></a>
                            </figure>
                        </div>
                        <div class="col-sm-6 col-12 box-3">
                            <h4><a href="blog.php">Processeur intel i9</a></h4>
                            <h5>Dernière génération de processeur de la marque Intel, permettant à votre machine de guerre de garantir une utilisation stable pendant vos marathons dora l'exploratrice. La légende raconte que leur durée de vie permet de voir l'intégralité  de One Piece.</h5>
                            <a href="blog_single.php" class="btn btn-success">+ info</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-12 box-4">
                            <figure class="figure">
                                <a href="blog.php"><img src="images/ventilo.jpg" class="figure-img img-fluid" alt="blog"></a>
                            </figure>
                        </div>
                        <div class="col-sm-6 col-12 box-5">
                            <h4><a href="blog.php">Ventilateur avec lumière</a></h4>
                            <h5>La lumière rouge permet de vérifier le cumul de poussière à l'intérieur de votre machine, qui gardera une haleine fraiche grâce à une ventilation digne d'un vent polaire</h5>
                            <a href="blog_single.php" class="btn btn-success">+ info</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-12 box-6">
                            <figure class="figure">
                                <a href="blog.php"><img src="images/maj-cartes-graphiques-dediees-intel-gaming.jpg" class="figure-img img-fluid" alt="blog"></a>
                            </figure>
                        </div>
                        <div class="col-sm-6 col-12 box-7">
                            <h4><a href="blog.php">Carte graphique intel gaming</a></h4>
                            <h5>Cette carte graphique vous permettra de jouer à  de nombreux jeux tels dofus, fortnite et minecraft en 4k, et permet un affichage parfait des détails de vos films préférés, à vous la possibilité de voir les cheveux blancs de Charle Ingals, la teinte jaune des dents de scarlett johannson ou même le sourcil rebelle de chewbacca</h5>
                            <a href="blog_single.php" class="btn btn-success">+ info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--container-->
    </section>
    
    <section class="section-7">
        <!-- Footer -->
        <?php include 'footer.php'; ?>
        <!-- Footer -->
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });

    </script>
</body>

</html>
