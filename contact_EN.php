<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="styles/style_contact.css">
    <link rel="stylesheet" href="styles/style.css">
</head>


    <body>
        <?php include"navbar.php";?>

    <form action="" id="contactFormEN" method= "POST">
        <h2>Contact Form</h2>
        <hr>
        <h3>"We are here for you! If you have any questions, suggestions, or if you wish to contact us for any other reason, please don't hesitate to fill out the form below. We will get back to you as soon as possible. Thank you for being a part of our coffee enthusiasts community."</h3>
        <hr>

        <div class="identite">
            <div>
                <label for="firstName"><b>First Name :</b></label>
                <input name="firstName" id="firstName" type="text" placeholder="Your First Name" />
            </div>
            <div>
                <label for="lastName"><b>Last Name :</b></label>
                <input name="lastName" id="lastName" type="text" placeholder="Your Last Name" />
            </div>
        </div>

        </div>
        <div class="contactclients">
            <div>
                <label for="tel"><b>Phone :</b> </label>
                <input type="text" id="tel" placeholder="Your Phone">
            </div>
            <div>
                <label for="mail"><b>Mail :</b> </label>
                <input type="text" id="mail" placeholder="Your Mail">
            </div>
        </div>

        <div class="message">
            <div>
                <label for="message"><b>Your Message :</b> </label>
                <textarea type="text" id="message"  placeholder="Your Message"></textarea>
            </div>


        </div>


        <button onclick='messageEN()' type="submit" id='submitEN'>Send</button>


    </form>
</body>
<script src='script.js'></script>
</html>