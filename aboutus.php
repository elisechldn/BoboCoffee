<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/styleaboutus.css">
    <title>Coffee Bobo</title>


    
</head>

<body>
    <?php include 'navbar.php'; ?>


    <main>

        <div class="barbuCarousel">

            <div class="teamBarbu">
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
                            
                        </ol>
                    </aside>
                </section>
            </div>
        </div>
        
        <section class="profilEquipe">
            <hr>
        <h1 >
               Notre Équipe
            </h1>
            <article>
                <img src="../assets/About_Us/Images/Caroussel_Photo_1.png" alt="">
                <h2> Barista passionné<br><br></h2>

                <p>Prénom : Alex<br>
                Âge : 28 ans<br><br>
                Alex est un amateur de café passionné qui connaît toutes les nuances des grains de café, des méthodes de brassage alternatives et des latte art. Il est capable de créer des boissons artisanales uniques et d'engager des conversations intéressantes sur le café avec les clients.</p>
            </article>
            <article>
            <img src="../assets/About_Us/Images/Caroussel_Photo_6.png" alt="">
                <h2>Artiste du latte<br><br></h2>

                <p>Prénom : Mia<br>
                Âge : 24 ans<br><br>
                Mia est une barista polyvalente qui excelle dans la préparation de diverses boissons, du café filtré aux espresso tonics en passant par les thés glacés maison. Elle a également une connaissance approfondie des pâtisseries artisanales et des options de petit-déjeuner santé.<p>
            </article>
            <article>
            <img src="../assets/About_Us/Images/Caroussel_Photo_2.png" alt="">
                <h2> Barista Polyvalent<br><br></h2>

                <p>Prénom : Luca<br>
                Âge : 30 ans<br><br>
                Luca est un expert en latte art qui transforme chaque tasse de café en une œuvre d'art visuelle. Ses créations uniques, des cœurs aux cygnes en passant par les motifs floraux, attirent les clients avec leur beauté et leur saveur exceptionnelle.</p>
            </article>
            <article>
            <img src="../assets/About_Us/Images/Caroussel_Photo_4.png" alt="">
                <h2>Spécialiste des produits locaux<br><br></h2>
                <p>Prénom : Emma<br>
                    Âge : 32 ans<br><br>
                Emma est la gestionnaire du café. Elle veille à ce que l'ambiance du café soit accueillante et chaleureuse, gère les opérations quotidiennes, organise des événements artistiques et assure une rotation constante des grains de café locaux et biologiques.</p>
            </article>
            <article>
            <img src="../assets/About_Us/Images/Caroussel_Photo_5.png" alt="">
                <h2>Gestionnaire du café<br><br></h2>

                <p>Prénom : Noah<br>
                Âge : 26 ans<br><br>
                Noah est le spécialiste des produits locaux du Bobo coffee. Il collabore avec des producteurs locaux pour approvisionner le café en produits frais, comme le miel artisanal, le lait bio, les pâtisseries faites maison et les confitures artisanales.</p>
            </article>
            <article>
            <img src="../assets/About_Us/Images/Caroussel_Photo_3.png" alt="">
                <h2> Responsable de la musique et de la culture<br><br></h2>

                <p>Prénom : Jean<br>
                Âge : 29 ans<br><br>
                Jean est chargé de créer l'ambiance musicale et culturelle du café. Elle organise des soirées musicales en direct, sélectionne la playlist du café, expose des œuvres d'art locales et organise des ateliers artistiques pour la communauté.</p>
                </p>
            </article>
            <hr>
            <p class="motdefin">Ces profils variés contribuent à créer une atmosphère unique et accueillante dans notre café, offrant une expérience mémorable à nos clients.</p>
        </section>

    </main>

    <?php include 'footer.php'; ?>

</body>

<script src='script.js'></script>

</html>