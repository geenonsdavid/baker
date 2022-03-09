<?php
$title = 'Modification';
include 'configuration.php';
include './layout/head.php';
?>

<main>
    <form action="validModification.php" method="POST" class="need-validation text-center">
        <label class="form-label d-block name" for="name"><?php echo "$_GET[name]" ?></label>
        <input type="hidden" name="name" value="<?php echo "$_GET[name]" ?>">

        <label class="form-label d-block" for="number">Quantité :</label>
        <input class="" type="number" name="number" value="<?php echo "$_GET[number]" ?>" min="0" max="50" required>
        <div class="valid-feedback">
            invalide!
        </div>
        <label class="form-label d-block" for="price">Prix/article :</label>
        <input class="" type="number" step="0.01" min="0" name="price" value="<?php echo "$_GET[price]" ?>" required>
        <input type="submit" class="btn d-block mx-auto border-brown my-2 bg-brown" value="Validez">
    </form>
</main>

<?php include './layout/footer.php'; ?>