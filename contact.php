<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="styles/style_contact.css">
    <link rel="stylesheet" href="styles/style.css">
</head>


    <body>
        <?php include"navbar.php";?>

    <form action="" id="contactForm" method= "POST">
        <h2>Formulaire de contact</h2>
        <hr>
        <h3>"Nous sommes là pour vous ! Si vous avez des questions, des suggestions ou si vous souhaitez nous contacter pour toute autre raison, n'hésitez pas à remplir le formulaire ci-dessous. Nous vous répondrons dès que possible. Merci de faire partie de notre communauté de passionnés de café !"</h3>
        <hr>

        <div class="identite">
            <div>
                <label for="firstName"><b>Prénom :</b></label>
                <input name="firstName" id="firstName" type="text" placeholder="Votre prénom" />
            </div>
            <div>
                <label for="lastName"><b>Nom :</b></label>
                <input name="lastName" id="lastName" type="text" placeholder="Votre nom" />
            </div>
        </div>

        </div>
        <div class="contactclients">
            <div>
                <label for="tel"><b>Téléphone :</b> </label>
                <input type="text" id="tel" placeholder="Votre téléphone">
            </div>
            <div>
                <label for="mail"><b>E-mail :</b> </label>
                <input type="text" id="mail" placeholder="Votre E-mail">
            </div>
        </div>

        <div class="message">
            <div>
                <label for="message"><b>Votre message :</b> </label>
                <textarea type="text" id="message"  placeholder="Votre Message"></textarea>
            </div>


        </div>


        <button onclick='messageFR()' type="submit">Envoyer le formulaire</button>
        


    </form>
</body>
<script src='script.js'></script>
</html>