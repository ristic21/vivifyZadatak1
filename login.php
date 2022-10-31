<?php
// Ukoliko nam se errori ne prikazuju uopste, potrebno je otkomentarisati narednu liniju koda
// error_reporting(E_ALL);
$email = "";
$password = "";

if ($_POST["email"] == $_SESSION["email"] && $_POST["password"] == $_SESSION["password"] ) {
    header("Location: home.php");
}
// TODO: Ovde pisati svu logiku oko logovanja korisnika, validacije i sve sto je potrebno da bi resili ovaj deo zadatka
?>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include('header.php'); ?>
    <section>
        <h1>Login</h1>
        <form method="post" action="">
        <span>Email: </span><input type="email" name="email"><br>
        <span>Password: </span><input type="password" name="Password">
        <input style="width: 80px; margin:15px 0px 0px 95px;" type="submit" name="login" value="Login"><br>
        </form>
        <!-- TODO: Ovde ubaciti formu i prikazivanje greske ukoliko su uneti kredencijali nevalidni -->
    </section>
    <?php include('footer.php'); ?>
</body>

</html>