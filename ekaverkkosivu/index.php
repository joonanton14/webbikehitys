<?php
// PHP:n tarkoitus on siirtää dataa käyttäjältä palvelimelle 
// ja palvelimelta käyttäjälle.
// Lisäksi kaikenlainen datan käsittely
sleep(1);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <!-- form määrittää minne ja miten data  (get/post) lähetetään-->
        <!--Lisää formiin salana input ja mäytä sivulla checkLogin-->
        <!--Kokeile myös salasanan piilotettua kun sitä kirjoitetaan-->
        <?php
        // Kirjoitetaan virheilmoitus, jos kirjautumisessa oli virhe

        if(isset($_GET["error"])){ // tarkistetaan onko avain olemassa, ennen kuin sitä käytetään
            if($_GET["error"] == "login"){ // Saadaan virhe, jos "error"-avain ei ole olemassa
                echo "<p>Käyttätunnus ja salasana eivät täsmää!</p>";
            }   
        }
        ?>

        <form action="checkLogin.php" method="post">   

            <input type="text" name="username" placeholder="Enter Username">
        
            <input type="password" name="password" placeholder="Enter Password">
        
            <input type="submit" value="Login">



        
    </form>
</body>
</html>