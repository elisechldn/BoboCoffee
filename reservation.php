<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" href="styles/styleresa.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bobo Coffee</title>
</head>

<body>
    <?php include"navbar.php";
    ?>

    <main>
    <form action="" method= "GET">
    <h3>Réservation</h3>
    <hr>

<div class="identite">
    <div>
        <label for="firstName">Prénom :</label>
     <input name="firstName" id="firstName" type="text" autocomplete="given-name" />
    </div>
    <div>
        <label for="lastName">Nom :</label>
        <input name="lastName" id="lastName" type="text" autocomplete="family-name" />
    </div>
</div>

<div class="infos">
    <div>
        <label for="nbr">Nombre de personnes : </label>
        <input type="text" id="nbr">
    </div>
    <div>
        <label for="date">Date :</label>
        <input type="date" id="date">
    </div>
    <div>
        <label for="heure">Heure :</label>
        <select name="heure" id="heure" required>
            <option value="" disabled selected hidden>Heure de passage.</option>
            <option value="12:00">12:00</option>
            <option value="12:15">12:15</option>
            <option value="12:30">12:30</option>
            <option value="12:45">12:45</option>
            <option value="13:00">13:00</option>
            <option value="Autre">hors de ces horaires</option>
        </select>
    </div>

</div>
<div class="contactclients">
    <div>
    <label for="tel">Votre numéro de téléphone : </label>
    <input type="text" id="tel">
</div>
<div>
    <label for="mail">Votre adresse mail : </label>
    <input type="email" id="mail">
</div>
</div>

<div class="message">
    <div>
        <label for="message">Si vous avez des demandes, et merci de nous indiquer si vous préfèrez être en terrasse ou en salle : </label>
        <input type="text" id="message">
    </div>


</div>


<button class="bouton" onclick="messageFRReservation()" type="submit">Réserver</button>


    </form>
</main>

<?php include'footer.php' ?>
</body>
<script src="script.js"></script>
</html>
