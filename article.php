
  <div class="col mx-auto m-4 bg-brown border-brown round-corner">

    <h5 class="col px-2 text-center bg-white border-brown w-40 rounded-pill  position-absolute start-50 translate-middle"><?php echo $date ?></h5>
    <div class="row d-flex px-2">
      <!-- nombre d'article -->
      <h5 class="col">Qté : <?php echo $orders[$i]["number"] ?></h5>
      <!--  prix d'un article -->
      <h5 class="col text-end"><?php echo $orders[$i]["price"] . $devise ?>/article</h5>
    </div>
    <!-- affiche nom de l'article -->
    <h3 class="name"><?php echo $orders[$i]["name"] ?></h3>
    <!-- Affiche le montant des articles achetés-->
    <h5 class="montant">Montant: <?php echo $orders[$i]["price"]*$orders[$i]["number"].$devise ?></h5>
  </div>
