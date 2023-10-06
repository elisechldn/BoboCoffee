<!DOCTYPE html>
<html lang="en-us">
<link rel="stylesheet" href="../styles/style.css">
<link rel="stylesheet" href="../styles/styleresa.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bobo Coffee</title>
</head>

<body>
    <?php include"navbar_EN.php";
    ?>

    <main>
    <form action="/" method="GET">
    <h3>Reservation</h3>
    <hr>

<div class="identite">
    <div>
        <label for="firstName">First Name :</label>
     <input name="firstName" id="firstName" type="text" autocomplete="given-name" />
    </div>
    <div>
        <label for="lastName">Last Name :</label>
        <input name="lastName" id="lastName" type="text" autocomplete="family-name" />
    </div>
</div>

<div class="infos">
    <div>
        <label for="nbr">Table for : </label>
        <input type="text" id="nbr">
    </div>
    <div>
        <label for="date">Date :</label>
        <input type="date" id="date">
    </div>
    <div>
        <label for="heure">Hour :</label>
        <select name="heure" id="heure" required>
        <option value="" disabled selected hidden>Select the time :</option>
        <option value="12:00">12:00</option>
        <option value="12:15">12:15</option>
        <option value="12:30">12:30</option>
        <option value="12:45">12:45</option>
        <option value="13:00">13:00</option>
        <option value="Autre">Other</option>
        </select>
    </div>

</div>
<div class="contactclients">
    <div>
    <label for="tel">Phone number : </label>
    <input type="text" id="tel">
</div>
<div>
    <label for="mail">Mail Address : </label>
    <input type="email" id="mail">
</div>
</div>

<div class="message">
    <div>
        <label for="message">If you have any question, and please let us know if you would prefer be seated inside or outside : </label>
        <input type="text" id="message">
    </div>
</div>
</div>


<button class="bouton" onclick="messageENReservation()" type="submit">Réserver</button>

    </form>
</main>

<?php include'footer_EN.php'; ?>
</body>
<script src="../script.js"></script>
</html>
