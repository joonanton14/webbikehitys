<?php
// GET vai POST
// GET on datan hakuun, POST on datan syöttämistä
// GET ei muokkaa palvelimen dataa, POST muokkaa dataa
// GET selain voi jättää välimuistiin datan, POST ei mahdollista
// GET ei turvallinen, ei salaista tietoa, POST turvallinen

session_start(); // tarvitaan funktio tiedoston alussa että sessio voi toimia

// Simuloidaan verkkosivun latausta, odottaa yhden sekunnin
sleep(1);

// normaali muuttuja
$muuttuja = "testi muuttuja";

// PHP:n globaali muuttuja
// $_GET $_FILES $_COOKIE
//echo $_SERVER["REQUEST_METHOD"]; 
// "POST" tai "GET" ^ tämän perusteella
//joko jatketaan suoritusta tai annetaan virhe

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Jos vertailu on true

    // Tarkistetaan onko käyttäjänimi ja salasana oikein
    // 1. otetaan tunnus ja salasana muuttujiin talteen
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username == "pertti69")
    {   
        if($password == "salasana123")
        {
            // tiedot oikein
            echo "Tervetuloa " . $username;
            // lisätään koodi jotta käyttäjä pysyy sisäänkirjautuneena eikä tarvitse aina kirjautua siään
            $_SESSION["username"] = $username; // käyttäjän sessiossa "username"-avain, hän on kirjautunut sisään
            // $_SESSION["loggedin"] = true; // toinen vaihtoehto
            header("Location: memberArea.php"); // siirto eteenpäin
        }
        else
        {
            // väärä salasana, virheilmoitus ja siirto
            // ei kannata ilmoittaa kumpi tieto oli väärin. haitallinen käyttäjä saa vain vinkkejä tiedoista
            header("Location: index.php?error=login");
            echo "Väärä salasana";
        }
    }
    else
    {
        // Väärä tunnus, virheilmoitus ja siirto
        header("Location: index.php?error=login");
        echo  "Väärä tunnus";
    }
    
    
}

else{
    // Vertailu false
    header("Location: index.php");
    echo "<h1>Invalid route</h1>"; // Virheilmoitus

}

?>
<!--Kaksi eri tapaa kirjoittaa dataa PHP:lla-->
<!-- $_POST on taulukko , jossa on key: value pareja. -->
<!--<p><?php echo "UserName: " . $_POST["username"];?></p>-->
<!-- <?php echo"<p>Password: " . $_POST["password"] . "</p>"; ?> -->
