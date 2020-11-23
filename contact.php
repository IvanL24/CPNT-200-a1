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
    
    <div class="profile">

      <figure>

        <img src="assets/images/profile.jpg" alt="profile">

        <figcaption>
            <h2>Ivan Lavena</h2>
        </figcaption>
      </figure>

      <h3>Owner</h3>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias numquam aliquam in fugiat doloremque, tempore cumque esse provident quod porro nihil autem enim quisquam labore sit voluptatem, unde impedit nesciunt!Tenetur esse nihil ipsa, cum architecto, recusandae fugiat, aliquid omnis harum rem vel sequi quia expedita fugit fuga? Quos, doloremque! Accusantium possimus illo voluptatem fugit modi mollitia dolorum qui commodi?
      </p>

    </div>
  
  </div>

  <!-- INSERT FOOTER -->
  <?php include('includes/partials/footer.php'); ?>  

</body>
</html>