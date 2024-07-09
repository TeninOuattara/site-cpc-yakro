<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixed Navbar with Taller Slider</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
       
        body {
            padding-top: 70px; /* Ajustez en fonction de la hauteur de votre navbar */
        }
        .carousel-item {
            height: 700px; /* Nouvelle hauteur pour le slider */
        }
        .carousel-item img {
            height: 100%;
            width: 100%;
            object-fit: cover; /* S'assure que l'image couvre toute la zone du slider */
        }
        .carousel-caption {
            position: absolute;
            top: 40%;
            left: 20%;
            transform: translate(-10%, -10%);
            background-color: rgba(0, 0, 0, 0.5); /* Fond semi-transparent pour améliorer la lisibilité du texte */
            color: white;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
        }
        .carousel-caption h5 {
            font-size: 3rem; /* Taille de police agrandie pour le titre */
        }
        .carousel-caption p {
            font-size: 1.5rem; /* Taille de police agrandie pour la description */
        }
  
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/images_cpc/cpc1.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 1 Title</h5>
                    <p>Description for Slide 1</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/images_cpc/cpc2.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bienvenue au CPC, Votre Passerelle Vers l'Excellence Professionnelle.</h5>
                    <p>Description for Slide 2</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/images_cpc/cpc3.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 3 Title</h5>
                    <p>Description for Slide 3</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
