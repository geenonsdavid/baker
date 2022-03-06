<?php include 'configuration.php' ?>
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
        <?php include 'navbar.php'; ?>
        <?php include 'total.php'; ?>
    </header>
    <main>
        <form action="#" method="get" class="need-validation text-center">
        <label class="form-label d-block name" for="name"><?php echo "$_GET[name]"?></label>
        <input type="hidden" name="name">
        <label class="form-label d-block" for="name">Quantité :</label>
        <input type="text" name="number" placeholder="<?php echo "$_GET[number]"?>">
        <label class="form-label d-block" for="name">Prix/article :</label>
        <input type="text" name="price" placeholder="<?php echo "$_GET[price]"?>">
        <button type="submit" class="btn d-block mx-auto border-brown my-2 bg-brown">Validez</button>
    </form>
        <?php
        
         ?>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>



</html>