<?php
// parameter page
$title = 'Valide modification';
include 'configuration.php';
include './layout/head.php';
?>


    <main>
        <?php

        // récupérer les données à modifier
        $number = $_POST['number'];
        $name = $_POST['name'];
        $price = $_POST['price'];

        echo "$number $name à $price €";
        ?>
    </main>

    <?php include './layout/footer.php'; ?>
    