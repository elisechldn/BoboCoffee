<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleaboutus.css">
    <link rel="stylesheet" href="styleNF.css">
    
    <title>Coffee Bobo</title>
</head>

<body>
   <?php include 'navbar.php'; ?>
   

    <main>

        <div class="team"></div>


        <section class="carousel" aria-label="Gallery">

            <ol class="carousel__viewport">
                <li id="carousel__slide1" tabindex="0" class="carousel__slide">
                    <div class="carousel__snapper">
                        <a href="#carousel__slide4" class="carousel__prev">Go to last slide</a>
                        <a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
                    </div>
                </li>
                <li id="carousel__slide2" tabindex="0" class="carousel__slide">
                    <div class="carousel__snapper"></div>
                    <a href="#carousel__slide1" class="carousel__prev">Go to previous slide</a>
                    <a href="#carousel__slide3" class="carousel__next">Go to next slide</a>
                </li>
                <li id="carousel__slide3" tabindex="0" class="carousel__slide">
                    <div class="carousel__snapper"></div>
                    <a href="#carousel__slide2" class="carousel__prev">Go to previous slide</a>
                    <a href="#carousel__slide4" class="carousel__next">Go to next slide</a>
                </li>
                <li id="carousel__slide4" tabindex="0" class="carousel__slide">
                    <div class="carousel__snapper"></div>
                    <a href="#carousel__slide3" class="carousel__prev">Go to previous slide</a>
                    <a href="#carousel__slide1" class="carousel__next">Go to first slide</a>
                </li>
            </ol>
            <aside class="carousel__navigation">
                <ol class="carousel__navigation-list">
                    <li class="carousel__navigation-item">
                        <a href="#carousel__slide1" class="carousel__navigation-button">Go to slide 1</a>
                    </li>
                    <li class="carousel__navigation-item">
                        <a href="#carousel__slide2" class="carousel__navigation-button">Go to slide 2</a>
                    </li>
                    <li class="carousel__navigation-item">
                        <a href="#carousel__slide3" class="carousel__navigation-button">Go to slide 3</a>
                    </li>
                    <li class="carousel__navigation-item">
                        <a href="#carousel__slide4" class="carousel__navigation-button">Go to slide 4</a>
                    </li>
                </ol>
            </aside>
        </section>
    </main>
    <footer>
        <!-- <div class="list">
            <ul>
                <li><a href="">Page d'accueil</a></li>
                <li><a href="">Menu</a></li>
                <li><a href="">Reservez une table</a></li>
                <li><a href="">Notre boutique</a></li>
                <li><a href="">Notre équipe</a></li>
            </ul>
        </div> -->
        <div class="jenesaispaslaquelle">
            <div class="horaires"><h6>Nos horaires</h6><p>Lundi au Vendredi : 08h / 19h Samedi et Dimanche 09h30 / 19h</p></div>
            <div class="logofooter"><img src="assets/logo.png" alt="logo"></div>
            <span class="trait"></span>
            <div class="réseau">
                <div class="mail">
                    <img class="iconeMail" src="assets/Icone_Courrier.svg" alt="mail">
                    <p class="mailFooter">Contactez nous</p>
                </div>
                <div>
                    <h6>Nos réseaux</h6>
                    <div class="flexiconeréseau">
                        <img class="iconeRéseau" src="assets/Icone_Instagram.svg" alt="">
                        <img class="iconeRéseau" src="assets/Icone_Twitter.svg" alt="">
                        <img class="iconeRéseau" src="assets/Icone_Facebook.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="mention">
            <p>Tous droits réservés</p>
            <p>© Mentions légales</p>
        </div>

    </footer>

    <script src='script.js'></script>
</body>

</html>