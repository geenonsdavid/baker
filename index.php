<?php
//titre de la page
$title = 'Achats';
include_once 'configuration.php';
include_once 'data.php';
// header
include 'layout/head.php';
?>

<!-- boucle affichant les articles -->
<main>
   <div class=" h-80">
      <?php
      foreach ($orders as $order) {
      ?>
         <div class="col-11 mx-auto m-4 bg-brown border-brown round-corner">
            <h5 class="col px-2 text-center bg-white border-brown w-40 rounded-pill  position-absolute start-50 translate-middle"><?php echo $date ?></h5>
            <div class="row d-flex px-2">
               <!-- nombre d'article -->
               <h5 class="col">Qté : <?php echo $order["number"] ?></h5>
               <!--  prix d'un article -->
               <h5 class="col text-end"><?php echo $order["price"] . $devise ?>/art.</h5>
            </div>
            <!-- affiche nom de l'article -->
            <a class="text-decoration-none" href="modification.php?name=<?php echo $order["name"] ?>
              &&number=<?php echo $order["number"] ?>
              &&price=<?php echo $order["price"] ?>">
              <h3 class="name"><?php echo $order["name"] ?></h3>
            </a>
            <!-- Affiche le montant des articles achetés-->
            <h5 class="montant">Montant: <?php echo $order["price"] * $order["number"] . $devise ?></h5>
         </div>
      <?php
      }
      ?>


   </div>
</main>


<?php include_once './layout/footer.php'; ?>