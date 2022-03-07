<?php
// parameter 
$title = 'Ajouter un article';
include 'configuration.php';
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
        <form action="validAjout.php" method="post">
            <select name ="name" id ="name" class="form-select w-50 mx-auto" aria-label="Default select example">
                <option selected>Choisir un article</option>
                <?php
                for ($i = 0; $i < count($articles); $i++) {
                    $article = $articles[$i]['name'];
                    echo "<option value=\"$article\">$article</option>";
                }
                ?>
                
            </select>
            <label for="number">Quantité :</label>
            <input type="number" name="number" id="number">
            <input type="submit" value="Ajoutez" class ="bg-brown border-brown">
        </form>
    </main>
    <footer>

    </footer>
</body>



</html>