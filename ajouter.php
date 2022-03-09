<?php
// parameter 
$title = 'Ajouter';
include 'configuration.php';
include './layout/head.php';
?>

<main>
    <form action="validAjout.php" method="post">
        <select name="name" id="name" class="form-select w-50 mx-auto" aria-label="Default select example" required>
            <option selected></option>
            <?php
            for ($i = 0; $i < count($articles); $i++) {
                $article = $articles[$i]['name'];
                echo "<option value=\"$article\">$article</option>";
            }
            ?>

        </select>
        <label for="number" class="form-label d-block text-center">Quantité :</label>
        <input type="number" name="number" min="0" max="50" id="number" class="form-control w-50 mx-auto" required>
        <input type="submit" value="Ajoutez" class="bg-brown border-brown d-block mx-auto">
    </form>
</main>
<?php include './layout/footer.php'; ?>