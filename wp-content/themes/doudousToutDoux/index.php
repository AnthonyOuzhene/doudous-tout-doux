<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les Doudous Tout Doux - Couture faite main et DIY</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= get_theme_file_uri() ?>/src/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="./images/doudous-tout-doux.svg" alt="Logo Les Doudous Tout Doux">
                <h1>Les Doudous Tout Doux</h1>
            </div>

            <ul class="nav-links">
                <li><a href="#">Homepage</a></li>
                <li><a href="#">Boutique</a></li>
                <li><a href="#">À Propos</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
            <ul class="connexion">
                <li><a href="#">Connexion</a></li>
                <li><a href="#">Panier</a></li>
            </ul>
        </nav>
        <div class="banner">
            <h2>Bienvenue sur Les Doudous Tout Doux !</h2>
            <a href="#contact" class="btn">Nous Contacter</a>
        </div>
    </header>

    <main>

        <section class="about">
            <div class="container">
                <h2 class="section-title">À propos</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <img class="about-img" src="https://source.unsplash.com/random/400x400/?sewing" alt="Image de couture">
                    </div>

                    <div class="col-lg-6">
                        <div class="about-intro">
                            <p class="about-text">Nous aimons créer des doudous, des jouets pour enfants, des sacs à main, des accessoires de mode et bien plus encore.</p>
                            <p class="about-text">Nous mettons tout en œuvre pour que nos produits soient à la fois esthétiques et pratiques, tout en respectant l'environnement et en encourageant le zéro déchet. </p>
                            <p class="about-text">Bienvenue chez Les Doudous Tout Doux, la boutique en ligne de couture de la créatrice Laura. Laura est une passionnée de couture depuis son plus jeune âge et elle a décidé de partager sa passion avec le monde entier grâce à cette boutique en ligne.</p>
                            <p class="about-text">Tous les produits que vous trouverez sur ce site sont des produits faits main et DIY recyclables et réutilisables. Utilisant des matériaux de qualité, je crée avec beauycou d'amour des produits uniques et originaux pour les enfants, les bébés et les adultes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="produits">
            <h2>Nos produits</h2>

            </div>
            <div class="produits">
                <div class="produit">
                    <a href="#"><img src="https://via.placeholder.com/400x400" alt="Produit 1"></a>
                    <h3>Produit 1</h3>
                    <p>Description produit 1</p>
                    <p>Prix : XX €</p>
                </div>
                <div class="produit">
                    <a href="#"><img src="https://via.placeholder.com/400x400" alt="Produit 2"></a>
                    <h3>Produit 2</h3>
                    <p>Description produit 2</p>
                    <p>Prix : XX €</p>
                </div>
                <div class="produit">
                    <a href="#"><img src="https://via.placeholder.com/400x400" alt="Produit 3"></a>
                    <h3>Produit 3</h3>
                    <p>Description produit 3</p>
                    <p>Prix : XX €</p>
                </div>
                <div class="produit">
                    <a href="#"><img src="https://via.placeholder.com/400x400" alt="Produit 4"></a>
                    <h3>Produit 4</h3>
                    <p>Description produit 4</p>
                    <p>Prix : XX €</p>
                </div>
                <div class="produit">
                    <a href="#"><img src="https://via.placeholder.com/400x400" alt="Produit 5"></a>
                    <h3>Produit 5</h3>
                    <p>Description produit 5</p>
                    <p>Prix : XX €</p>
                </div>
                <div class="produit">
                    <a href="#"><img src="https://via.placeholder.com/400x400" alt="Produit 6"></a>
                    <h3>Produit 6</h3>
                    <p>Description produit 6</p>
                    <p>Prix : XX €</p>
                </div>
            </div>
            <div class="btn">
                <a href="#">Voir tous les produits</a>

        </section>


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h3>À propos</h3>
                        <p>Les Doudous Tout Doux est un site de couture qui vend des produits faits main ou DIY recyclables et réutilisables.</p>
                    </div>
                    <div class="col-md-3">
                        <h3>Boutique</h3>
                        <ul>
                            <li><a href="#">Tous les produits</a></li>
                            <li><a href="#">Nouveautés</a></li>
                            <li><a href="#">Meilleures ventes</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Informations</h3>
                        <ul>
                            <li><a href="#">À propos</a></li>
                            <li><a href="#">Contactez-nous</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Suivez-nous</h3>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>