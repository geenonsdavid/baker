<?php
// parameter page
$title = 'Valide modification';
include 'configuration.php';
include_once './layout/head.php';
?>


    <main>
        <?php

        // récupérer les données à modifier
        $name = $_POST['name'];
        $number = $_POST['number'];

        echo "Vous avez ajouté $number $name";
        ?>
    </main>
    
<?php include './layout/footer.php'; ?>
    