<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bobo Coffee - votre coffeeshop et torréfacteur préféré</title>
    <link href="../styles/style.css" rel="stylesheet">
    <link href="../styles/style_boutique.css" rel="stylesheet">
</head>

<?php include ('tableauproduits_en.php'); ?>

<body>
    <?php include'navbar_EN.php' ?>

    <main>
        <section>
            <div class="shopIntro">
                <div class="shopText">
                    <h1>Our shop</h1>

            <p>Were you captivated by one of our products during your tasting?
                Don't hesitate to visit our store! <br>
                From our own roasted coffee blends to accessories for making your own lattes, you'll 
                find all the essentials to extend your Bobo Coffee experience!
            </p></div>
        </div>
        </section>
    <section class="Offres">
        <h2>Our current offers</h2>
        <div class="slider-container-slider-1">
            <div class="slider">
                    <p>For every €35 spend, <br>
                    receive a Bobo Coffee tote bag</p>
                    <p>Purchase 200g of coffee <br>
                    and get an additional 50g free</p>
                    <p>Enjoy a 20% discount when buying<br>
                     a coffee maker and a grinder together.</p>
                <p>For every €35 spend, <br>
                    receive a Bobo Coffee tote bag</p>
            </div>
        </div>
    </section>

        <section>
            <h2>Our products</h2>
            <div class="content_products">
            <?php foreach($products as $product){ ?>
            <article class="wrapper">
                <div class="product-img">
                    <img src="../assets/Boutique/Articles/<?= $product['photo']?>" height="420" width="327">
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
        </div>
        </section>
    </main>

<?php include'footer_EN.php' ?>
<script src="../script.js"></script>
</body>
</html>