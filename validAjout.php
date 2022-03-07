<?php
// parameter page
$title = 'Valide modification';
include 'configuration.php'
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Baker</title>
</head>


<body>
    <header>
        <?php
        $_GET['title'] = $title;
        include 'navbar.php'; ?>
        <?php include 'total.php'; ?>
    </header>
    <main>
        <?php

        // récupérer les données à modifier
        $name = $_POST['name'];
        $number = $_POST['number'];

        echo "Vous avez ajouté $number $name";
        ?>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>



</html>