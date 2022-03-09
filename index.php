<?php
//titre de la page
$title = 'Achats';
include_once 'configuration.php';
// header
include 'layout/head.php';
?>

<!-- boucle affichant les articles -->
<main>
   <div class=" h-80">
      <?php
      for ($i = 0; $i < count($orders); $i++) {
         include "article.php";
      }
      ?>
   </div>
</main>


<?php include_once './layout/footer.php'; ?>