<div id="afficheArticle" class="row">
  <div class="col-8 mx-auto px-2 bg-secondary rounded-3">
    <div class="row mx-0">
      <h5 class="col-6 bg-white rounded-pill mx-auto text-center border border-dark"><?php echo $date ?></h5>
    </div>

    <div class="row-8 d-flex">
      <!-- nombre d'article -->
      <h5 class="col pe-2">Qté : <?php echo $number ?></h5>
      <!--  prix d'un article -->
      <h5 class="col text-end"><?php echo $price . $devise ?>/article</h5>
    </div>
    <!-- affiche nom de l'article -->
    <h3 class="text-center"><?php echo $name ?></h3>
    <!-- Affiche le montant -->
    <h5 class="text-center">Montant: <?php echo $montant . $devise ?></h5>
  </div>
</div>