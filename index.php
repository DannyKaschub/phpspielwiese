<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feldplaner</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        Übungsseite für php
    </header>

    <section>
        <div class="navigation">
            <nav>
                <ul>
                    <li><a href="index.php?page=home">Home</a></li>
                    <li><a href="index.php?page=aboutUs">Über uns</a></li>
                    <li><a href="index.php?page=contact">Kontakt</a></li>
                    <li><a href="index.php?page=imprint">Impressum</a></li>
                </ul>
            </nav>
        </div>
        <div class="content">

            <?php

            if ($_GET['page'] == 'home') {
                echo "<h1>Dies ist eine trainings PHP Seite</h1>
                
                <form class='card-generate' action='generate_card.php' method='post' enctype='multipart/form-data'>
                <label for='title'>Überschrift:</label>
                <input type='text' name='title' id='title' required><br><br>
          
                <label for='text'>Text:</label>
                <textarea name='text' id='text' required></textarea><br><br>
          
                <label for='image'>Bild:</label>
                <input type='file' name='image' id='image' accept='image/*' required><br><br>
          
                <input type='submit' value='Karte generieren'>
                </form>
                
                
                ";
            }




            if ($_GET['page'] == 'aboutUs') {
                echo "<h1>Ich bin ein kleiner Programierer der grad php lernt</h1>
                <p>Die website ist eher spasig gebaut und dient mir nur als spielwiese zum technicken lernen. mal sehen was alle kommt ^^</p>
                ";
            }

            if ($_GET['page'] == 'contact') {
                echo "
            <form class='contact-form action='' method='post'>
                <label for='name'>Name:</label>
                <input type='text' name='name' id='name' required>
          
                <label for='email'>Email:</label>
                <input type='email' name='email' id='email' required>
          
                <label for='message'>Nachricht:</label>
                <textarea name='message' id='message' required></textarea>
          
            <input type='submit' value='Absenden'>
          </form>
            ";
            }

            if ($_GET['page'] == 'imprint') {
                echo "<h1>Hier wäre Platz für ein Impressum</h1>
                    <p>Ich bin aber faul also schreib ich hier keins :P</p>
            
            ";
            }
            ?>

        </div>
    </section>
</body>

</html>