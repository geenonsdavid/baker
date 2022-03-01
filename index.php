<?php include 'configuration.php'?>
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
<div class="container p-0">
<header>
            <?php include 'navbar.php'; ?>
</header>
    <body>
        <main>
            <?php include 'total.php'; ?>
            <?php include 'listArticle.php'; ?>
            
        </main>
    </body>
<footer>
    <button type="button" class="floatingButton">
                <img src="./icons/plus-circle.svg" height="50px" width="50px" alt="">
    </button>
</footer>    
</div>

</html>