<?php

// Ukoliko nam se errori ne prikazuju uopste, potrebno je otkomentarisati narednu liniju koda
 //error_reporting(E_ALL);

// TODO: Ovde pisati svu logiku oko registrovanja korisnika, validacije i sve sto je potrebno da bi resili ovaj deo zadatka


session_start();

echo "<pre>";

$name = [];
$surname = [];
$email = [];
$password = [];
$emailExist = [];
var_dump($_SESSION);

if (!empty($_POST["submit"])) {
    $name = array_push($_POST["name"]);
    $surname = array_push($_POST["surname"]);
    $email = array_push($_POST["email"]);

    $_SESSION["name"] = $name;
    $_SESSION["surname"] = $surname;
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    if ($_SESSION["email"] == $_POST["email"]) {
        $emailExist="Email already registered.";
    } 
} 



if ($_SESSION["email"] == $_POST["email"]) {
    $emailExist="Email already registered.";
} 



echo "</pre>";



?>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include('header.php'); ?>
    <section>
        <h1>Register</h1>
        <form method="post" action="">
        <span>Name:</span><input type="text" name="name"><br>
        <span>Surname:</span><input type="text" name="surname"><br>
        <span>Email:</span><input type="email" name="email"><br>
        <span>Password:</span><input type="password" name="password"><br>
        <input style="width: 80px; margin:0px 0px 0px 95px;" type="submit" name="submit" value="Register"><br>
        </form>

        <p> <?php 

                echo $emailExist;
        
            ?> 
        </p>

        <!-- TODO: Ovde ubaciti formu i prikazivanje greske ukoliko korisnik sa unetim emailom vec postoji -->
    </section>
    <?php include('footer.php'); ?>
</body>

</html>
