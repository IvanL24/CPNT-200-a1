<?php 

// INSERT _CONFIG
include('includes/_config.php');
$page_title = "Homepage";


?>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- INSERT HEAD -->
<?php include('includes/partials/head.php'); ?>

</head>
<body>
  <div id="container">
  <!-- INSERT HEADER -->
  <?php include('includes/partials/header.php'); ?>
    
    <div class="cards">

      <figure>
        <img src="assets/images/apollo-chocolate.jpg" alt="choco">
        <figcaption><h3>Apollo</h3></figcaption>
      </figure>

      <figure>
        <img src="assets/images/choco-baby.jpg" alt="choco">
        <figcaption><h3>Chocobaby</h3></figcaption>
      </figure>

      <figure>
        <img src="assets/images/chocoball.jpg" alt="choco">
        <figcaption><h3>Chocoball</h3></figcaption>
      </figure>

      <figure>
        <img src="assets/images/kabaya-peti-pudding-choco.jpg" alt="choco">
        <figcaption><h3>Kabaya Petit Pudding</h3></figcaption>
      </figure>

      <figure>
        <img src="assets/images/kitkat-chocolate.jpg" alt="choco">
        <figcaption><h3>Kit-Kat</h3></figcaption>
      </figure>

      <figure>
        <img src="assets/images/koalas-march.jpg" alt="choco">
        <figcaption><h3>Koala's March</h3></figcaption>
      </figure>

      <figure>
        <img src="assets/images/meiji-matcha.jpg" alt="choco">
        <figcaption><h3>Maiji Matcha Bar</h3></figcaption>
      </figure>

      <figure>
        <img src="assets/images/ramune-candy.png" alt="choco">
        <figcaption><h3>Ramune Candy</h3></figcaption>
      </figure>

      <figure>
        <img src="assets/images/tirol-chocolate.jpg" alt="choco">
        <figcaption><h3>Tirol</h3></figcaption>
      </figure>


    </div>

  <!-- INSERT FOOTER -->
  <?php include('includes/partials/footer.php'); ?>  

</body>
</html>