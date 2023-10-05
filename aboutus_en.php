<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_aboutus_en.css">
    <title>Coffee Bobo</title>


    
</head>

<body>
    <?php include 'navbaren.php'; ?>


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
               Our Crew
            </h1>
            <article>
                <img src="assets/Caroussel_Photo_1.png" alt="">
                <h2>Passionnate Barista<br><br></h2>

                <p>Name : Alex<br>
                Age : 28 ans<br><br>
                Alex is a passionate coffee enthusiast who knows all the nuances of coffee beans, alternative brewing methods, and latte art. He is capable of crafting unique artisanal beverages and engaging in interesting coffee conversations with customers.</p>
            </article>
            <article>
            <img src="assets/Caroussel_Photo_6.png" alt="">
                <h2>Latte Artist<br><br></h2>

                <p>Name : Mia<br>
                Âge : 24 ans<br><br>
                Mia is a versatile barista who excels in preparing various beverages, from filtered coffee to espresso tonics and homemade iced teas. She also has a deep knowledge of artisanal pastries and healthy breakfast options.<p>
            </article>
            <article>
            <img src="assets/Caroussel_Photo_2.png" alt="">
                <h2>Versatile Barista<br><br></h2>

                <p>Name : Luca<br>
                Âge : 30 ans<br><br>
                Luca is a latte art expert who transforms each cup of coffee into a visual work of art. His unique creations, from hearts to swans to floral patterns, attract customers with their beauty and exceptional flavor.</p>
            </article>
            <article>
            <img src="assets/Caroussel_Photo_4.png" alt="">
                <h2>Local Products Specialist<br><br></h2>
                <p>Name : Emma<br>
                    Âge : 32 ans<br><br>
                    Emma is the café manager. She ensures that the café's atmosphere is welcoming and warm, manages daily operations, organizes artistic events, and ensures a constant rotation of local and organic coffee beans.</p>
            </article>
            <article>
            <img src="assets/Caroussel_Photo_5.png" alt="">
                <h2>Commited Coffe Mangager<br><br></h2>

                <p>Name : Noah<br>
                Âge : 26 ans<br><br>
                Noah is the specialist in local products for the Bobo coffee. He collaborates with local producers to supply the café with fresh products, such as artisanal honey, organic milk, homemade pastries, and artisanal jams.</p>
            </article>
            <article>
            <img src="assets/Caroussel_Photo_3.png" alt="">
                <h2>Atmosphere Manager<br><br></h2>

                <p>Name: Jean<br>
                Âge : 29 ans<br><br>
                Jean is responsible for creating the musical and cultural ambiance of the café. She organizes live music nights, curates the café's playlist, showcases local artworks, and arranges artistic workshops for the community.</p>

            </article>
            <hr>
            <p class="motdefin">These diverse profiles contribute to creating a unique and welcoming atmosphere in our coffee, offering a memorable experience to our customers.</p>
        </section>

    </main>

  <?php include 'footeren.php'; ?>

</body>

<script src='script.js'></script>

</html>