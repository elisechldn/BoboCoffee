<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bobo Coffee - votre coffeeshop et torréfacteur préféré</title>
    <link href="style.css" rel="stylesheet">
    <link href="boutique.css" rel="stylesheet">
</head>

<?php include ('tableauproduits.php') ?>

<body>
    <nav>
        <div class="navleft">
            <ul>
                <li><a href="">Accueil</a></li>
                <li><a href="">Menu</a></li>
                <li><a href="">Réservation</a></li>
            </ul>
        </div>

        <div class="centerCircle">
            <img src="images/logo_sans_fond_v2.png" class="logo" alt="Tasse de café cerclée 
            du nom de la boutique et de sa date de création.">
        </div>
        <div class="navright">
            <ul>
                <li><a href="">La boutique</a></li>
                <li><a href="">L'équipe</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <section>
            <div class="shopIntro">
                <div class="shopText">
                    <h1>La boutique</h1>

            <p>Vous avez été séduit par l'un de nos produits lors de votre dégustation ?
            N'hésitez pas à passer par notre boutique ! <br>D'un mélange de café torréfié 
            par nos soins 
            aux accessoires pour réaliser vos propres lattes, vous retrouverez 
            tous les indispensables pour prolonger votre Bobo Coffee expérience! 
            </p></div>
        </div>
        </section>
    <section class="Offres">
        <h2>Nos offres du moment</h2>
        <div class="slider-container-slider-1">
            <div class="slider">
                    <p>Pour 35€ acheté, <br>
                    un totebag Bobo Coffee offert</p>
                    <p>Pour 200g de café acheté, <br>
                    50g de café offert</p>
                    <p>20% de réduction pour l'achat<br>
                    d'une cafetière et d'un moulin</p>
                <p>Pour 35€ acheté, <br>
                    un totebag Bobo Coffee offert</p>
            </div>
        </div>
    </section>

        <section>
            <h2>Nos produits</h2>
            <?php foreach($products as $product){ ?>
            <article class="wrapper">
                <div class="product-img">
                    <img src="assets/<?= $product['photo']?>" height="420" width="327">
                </div>

                <div class="product-info">
                    <div class="product-text">
                        <h1><?= $product['name'];?></h1>
                        <p><?= $product['description'];?></p>
                    </div>
                    <div class="product-price-btn">
                        <p><span><?= $product['price'];?></span>€</p>
                        <button type="button">buy now</button>
                    </div>
                </div>
            </article>
            <?php } ?>
        </section>
    </main>

<!-- <footer>
<div class="centerCircleFoot"><img src="images/logo_sans_fond_v2.png" class="logo"></div>
</footer> -->
<script href="script.js"></script>
</body>
</html>