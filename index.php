<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bobo Coffee</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/style_Home.css">
</head>
<body>

    <?php 
        include 'navbar.php';
    ?>

    <header>
            <img src="../assets/Home/img_header.jpg">   
            <div class="header_text">
                <h1>Bienvenue <br>chez Bobo Coffee</h1>
                <p>
                    L'endroit où l'élégance décontractée rencontre le charme bohème au cœur de la Ville Lumière. 
                </p>
            </div>
    </header>


    <main>

    <section class="valeurs">
        <div class="separator">
            <hr>
            <h2>Nos Valeurs</h2>
            <hr>
        </div>
        <div class="section_valeurs">
            <div class="valeur_article">
                <img src="assets/Home/icons/cake_gourmand.svg" class="icon">
                <h3>Gourmandise</h3>
                <p>Éveillez vos sens à une explosion de saveurs dans un lieu où la gourmandise est élevée au rang d'art, et chaque morsure est une symphonie de plaisir.</p>
            </div>

            <div class="valeur_article">
                <svg class="icon_engagement icon" style="enable-background:new 0 0 256 256;" version="1.1" viewBox="0 0 256 256" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M144.1,95.7c2.6,0,4.9-2.1,5-4.7l2.1-37.1c0.2-2.8-2-5.1-4.7-5.3c-2.8-0.2-5.1,2-5.3,4.7l-2.1,37.1c-0.2,2.8,2,5.1,4.7,5.3   C143.9,95.7,144,95.7,144.1,95.7z"/><path d="M173.9,82.2c2.6,0,4.9-2.1,5-4.7l2.2-38.9c0.2-2.8-2-5.1-4.7-5.3c-2.7-0.2-5.1,2-5.3,4.7l-2.2,38.9c-0.2,2.8,2,5.1,4.7,5.3   C173.7,82.2,173.8,82.2,173.9,82.2z"/><path d="M246.7,164.4c-4.7-5.8-12.4-7.7-19.2-4.8l-61.9,26c-2.6,1.1-3.8,4-2.7,6.6c1.1,2.6,4,3.8,6.6,2.7l61.9-26   c2.6-1.1,5.7-0.3,7.5,1.9c1.1,1.4,1.6,3.2,1.3,5c-0.3,1.8-1.3,3.4-2.9,4.4c-27,17.6-88.5,52.4-91.4,54.1c-0.1,0.1-0.2,0.1-0.3,0.2   l0,0c-7.5,4.4-15.8,5.6-26.4,3.8c-0.6-0.1-11.2-1.4-49.3-6.1L53,229.9v-67.7c2.8-0.2,5.2-0.3,6.3-0.3l0.6,0   c23.4-1.5,45.7,3,69.3,7.8c3,0.6,6.1,1.2,9.1,1.8c3.2,0.6,5.6,3.5,5.6,6.8c0,0.2,0,0.4-0.1,0.8c-0.2,1.9-1.2,3.3-2,4   c-1.3,1.3-3,2-4.9,2H89.8c-2.8,0-5,2.2-5,5c0,2.8,2.2,5,5,5h47.3c4.5,0,8.8-1.8,12-5c2.7-2.8,4.4-6.2,4.8-9.7   c0.1-0.7,0.2-1.5,0.2-2.2c0-8.1-5.8-15.1-13.7-16.6c-3-0.6-6-1.2-9-1.8c-23.2-4.7-47.3-9.6-71.9-8l-0.5,0c-1.1,0.1-3.5,0.2-6.1,0.3   c-0.6-2.1-2.4-3.7-4.8-3.7H10.7c-2.8,0-5,2.2-5,5v84.4c0,2.8,2.2,5,5,5H48c2,0,3.7-1.2,4.5-2.9l16.2,2c20.1,2.5,47.6,5.8,48.8,6   c3.7,0.7,7.3,1,10.7,1c8.3,0,15.7-2,22.4-5.9c0.1,0,0.1-0.1,0.2-0.1c0.6-0.4,64.2-36.3,92-54.4c3.9-2.5,6.6-6.6,7.3-11.2   C250.8,172.7,249.6,168,246.7,164.4z M43,232.9H15.7v-74.3H43V232.9z"/><path d="M122.8,100.6c2.3-1.6,2.8-4.8,1.2-7c-9-12.6-8.3-29.1,1.7-41c20-23.7,51.6-32.2,76.3-35.1c1,14.2-1,30.1-5.6,45.5   c-1.7,5.6-17.5,54.5-51.3,44.4c-1.4-0.5-10.3-4.5-12.2-5.6c-1.1-0.8-2.5-1.2-3.9-1c-6.4,1.1-12.9,24-13.4,34.8   c-0.1,2.8,2,5.1,4.8,5.2c0.1,0,0.2,0,0.2,0c2.7,0,4.9-2.1,5-4.8c0.4-9.4,3.9-18.7,6.1-23.7c0.7,0.3,1.5,0.7,2.4,1.1   c1.6,0.7,6.7,3.1,8,3.4c32.9,9.8,55-21.4,63.9-51.1c5.5-18.4,7.5-37.6,5.5-54.6c-0.5-2.6-3.1-4.6-5.8-4.4   c-38.8,3.6-69.1,17.2-87.7,39.1c-13.1,15.5-14,36.9-2.2,53.3C117.4,101.7,120.5,102.3,122.8,100.6z"/></g></svg>
                <h3>Engagement durable et local</h3>
                <p>Le respect de la nature est l’ingrédient essentiel de nos recettes, pour vous offrir un café qui a bon goût et qui fait du bien à la planète.</p>
            </div>

            <div class="valeur_article">
                <svg class="icon_conviviale icon" style="enable-background:new 0 0 66 66;" version="1.1" viewBox="0 0 66 66" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M64,44.3h-0.9v-20c0-0.2,0-0.4,0-0.5c-0.2-4.2-2.2-8.1-5.6-10.9L46,3.7c-2-1.9-5.1-2-7.1-0.2c-1.2,1.1-1.5,2.6-0.8,4.4   c-0.4-0.1-0.8-0.1-1.1-0.1c-1.9,0-3.7,0.8-4.8,2.3c-1.2-1.4-2.9-2.3-4.8-2.3c-0.5,0-1,0.1-1.4,0.2c0.8-1.8,0.5-3.4-0.7-4.5   C23.1,1.7,20,1.8,18,3.7L6.6,12.8C3.2,15.5,1.2,19.5,1,23.7c0,0.2,0,0.4,0,0.5v21c0,0,0,0,0,0v17c0,0.5,0.5,1,1,1c0.6,0,1-0.5,1-1   v-16l15,0v16.5c0,0.6,0.4,1,1,1c0.5,0,1-0.4,1-1V45.3c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c-0.9-3-0.2-6.3,1.9-8.6l7.3-8   c0.6-0.6,0.8-1.5,0.6-2.3c0.6,0.5,1.1,0.9,1.7,1.4c0.1,0.1,0.1,0.1,0.2,0.1c0.1,0.1,0.3,0.1,0.4,0.1c0.2,0,0.4-0.1,0.6-0.2   c0.5-0.4,1-0.8,1.4-1.2c-0.1,0.7,0.2,1.5,0.7,2.1l7.3,8c1.9,2.1,2.7,5.1,2.1,7.9h-1.1c-0.6,0-1,0.5-1,1v13.2c0,0.6,0.4,1,1,1H64   c0.6,0,1-0.4,1-1V45.3C65,44.7,64.6,44.3,64,44.3z M26.4,23c-0.3-0.1-0.6-0.1-0.9-0.2c-1.5-0.1-3.1,0.5-4.2,1.5l-3.8,3.9   c-0.7,0.6-1.5,0.9-2.4,0.8c-0.9-0.2-1.6-0.7-2-1.6l-0.8-1.6c-0.1-0.1-0.1-0.2-0.1-0.3c-1-2.6,0-5.6,2.3-7.3l6.8-5.1   c0,0.1-0.1,0.1-0.1,0.1C20.6,15.8,22.4,19.1,26.4,23z M43.3,13.4l6.4,4.8c2.3,1.7,3.2,4.7,2.3,7.3c0,0.1-0.1,0.2-0.1,0.3l-0.7,1.6   c-0.4,0.8-1.1,1.4-2,1.6c-0.9,0.2-1.8-0.1-2.4-0.8l-3.8-3.9c-1.1-1.1-2.6-1.7-4.2-1.5c-0.2,0-0.4,0-0.6,0.1   C41.9,19.1,43.7,15.9,43.3,13.4z M43.7,35.1l-7.3-8c-0.2-0.2-0.2-0.6,0-0.9c0.6-0.8,1.5-1.3,2.4-1.3c1-0.1,1.9,0.3,2.6,1l3.9,3.9   c1.1,1.1,2.7,1.6,4.2,1.3c1.5-0.3,2.8-1.3,3.5-2.7l0.8-1.6c0.1-0.1,0.1-0.3,0.2-0.5c1.3-3.4,0.1-7.4-2.9-9.6l-8.2-6.2   c-0.9-0.7-1.6-1.4-2.1-2.2c-0.7-1-1.3-2.5-0.4-3.3c1.3-1.1,3.3-1.1,4.5,0.1c0,0,0,0.1,0.1,0.1l11.5,9.2c2.9,2.4,4.7,5.8,4.8,9.4   c0,0.1,0,0.3,0,0.5v20H46.3C46.9,41,45.9,37.6,43.7,35.1z M63,57.5H44.2V46.3H63V57.5z"/><path d="M44.2,46.3v11.2H63V46.3H44.2z M49.6,53.5c0,0.5-0.4,1-1,1c-0.5,0-1-0.5-1-1v-3c0-0.5,0.5-1,1-1c0.6,0,1,0.5,1,1V53.5z"/><path d="M49.6,50.6v3c0,0.5-0.4,1-1,1c-0.5,0-1-0.5-1-1v-3c0-0.5,0.5-1,1-1C49.2,49.6,49.6,50,49.6,50.6z"/></g></svg>
                <h3>Solidarité et Convivialité</h3>
                <p>Ensemble pour un monde sans faim. Ici, chaque différence est une richesse, chaque conversation est une découverte.</p>
            </div>
        </div>
    </section>

    <section>
        <div class="separator">
            <hr>
            <h2>Nos Gourmandises</h2>
            <hr>
        </div>
        <p class="para_gourmand">Nos gourmandises sont préparées avec soin, mettant en valeur les saveurs et les textures pour offrir une expérience gustative exquise.</p>

        <div  class="gourmandises">
            <div class="section_cercle_produits">
                <div class="cercle_produit">
                    <img src="assets/Home/icons/icon_boisson_fraiche.svg ">
                    <h4>Boissons froides</h4>
                </div>
                <div class="cercle_produit">
                    <img src="assets/Home/icons/icon_boisson_chaude.svg ">
                    <h4>Boissons chaudes</h4>
                </div>
                <div class="cercle_produit">
                    <img src="assets/Home/icons/muffin.png ">
                    <h4 class=muffins>Muffins</h4>
                </div>
                <div class="cercle_produit">
                    <img src="assets/Home/icons/icon_sucres.svg ">
                    <h4>Recettes sucrées</h4>
                </div>
            </div>

            <img src="assets/Home/main_gourmandise.jpg">
        </div>
    </section>

    <section>
        <div class="separator">
                <hr>
                <h2>Où nous trouver ?</h2>
                <hr>
        </div>

        <div class="localisation">
            <div class="card">
                <div class="title_card">
                    <h3>Bobo Coffee</h3>
                </div>
                <div class="informations_coffee">
                    <div class="adresse">
                        <h4>66 rue Legendre, 75017 Paris</h4>
                    </div>
                    <div class="horaires">
                        <h4>Les horaires :</h4>
                        <ul>
                            <li>Lundi au Vendredi : <br>de 8h à 19h</li>
                            <li>Samedi et Dimanche : <br>de 9h30 à 19h</li>
                        </ul>
                    </div>
                </div>
            </div>
    
            <div class="map">
                <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=66%20rue%20Legendre,%2075017%20Paris+(Bobo%20Coffee)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
        </div>

    </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
<script src="script.js"></script>
</html>