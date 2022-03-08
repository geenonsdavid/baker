<?php
$title = 'Modification';
include 'configuration.php' ?>
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
        <form action="validModification.php" method="POST" class="need-validation text-center">
        <label class="form-label d-block name" for="name"><?php echo "$_GET[name]"?></label>
        <input type="hidden" name="name" value="<?php echo "$_GET[name]"?>">

        <label class="form-label d-block" for="number">Quantité :</label>
        <input class="" type="number" name="number" value="<?php echo "$_GET[number]"?>" min="0" max="50" required>
        <div class="valid-feedback">
            invalide!
        </div>
        <label class="form-label d-block" for="price">Prix/article :</label>
        <input class="" type="number" step="0.01" min="0" name="price" value="<?php echo "$_GET[price]"?>" required>
        <input type="submit" class="btn d-block mx-auto border-brown my-2 bg-brown" value="Validez">
    </form>
        <?php
        
         ?>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>



</html>