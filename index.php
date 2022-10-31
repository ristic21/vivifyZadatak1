<?php
// Ukoliko nam se errori ne prikazuju uopste, potrebno je otkomentarisati narednu liniju koda
// error_reporting(E_ALL);

// TODO (NEOBAVEZNO): - Ako neko dodje na ovu stranicu kao ulogovani korisnik, prebaciti ga odmah na home stranicu posto je ovo guest stranica
if(isset($_COOKIE)) {
    header("location: home.php");
}
?>

<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include('header.php'); ?>

    <section>
        <h1>Welcome</h1>
    </section>

    <?php include('footer.php'); ?>
</body>

</html>