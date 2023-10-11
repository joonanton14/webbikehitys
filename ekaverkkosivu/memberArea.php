<?php
session_start(); // tarvitaan funktio tiedoston alussa että sessio voi toimia
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        <!--Tervehdi tässä käyttäjää-->
        <!-- Tästä jatketaan itsenäisesti-->

        if($_SESSION["username"]){ // tarkistetaan onko käyttäjä kirjautunut
            echo "on";
        }
        else{
            echo "ei ole";
        }

        ?>   
    </div>

</body>
</html>