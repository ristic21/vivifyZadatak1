<?php
// Ukoliko nam se errori ne prikazuju uopste, potrebno je otkomentarisati narednu liniju koda
// error_reporting(E_ALL);

// TODO: Ovde pisati svu logiku oko logovanja korisnika, validacije i sve sto je potrebno da bi resili ovaj deo zadatka

?>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="header-content">
            <!-- TODO: Home stranica ima drugaciji header, pa je ovde potrebno to odraditi -->
            <h3>Welcome <?php echo $name . " " . $surname  ?></h3>
        </div>
    </header>
    <section>
        <!-- TODO: Ovde je potrebno izlistati sve korisnike -->
        <p>
            <?php 
            /*foreach($_SESSION) {
                echo $_SESSION["name"] . " " . $_SESSION["surname"];
            }*/
            ?>
        </p>
    </section>
    <?php include('footer.php'); ?>
</body>

</html>