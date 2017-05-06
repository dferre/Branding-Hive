<?php
include 'header.php';

?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>The Hive</title>
    <!-- CSS stylesheet-->
    <link rel="stylesheet" href="css/main.css" type='text/css'>
  </head>
  <body>
    <?php
    include 'includes/nav.php';


    ?>

    <!-- Section-->
    <section class="dashboard section" style="
    margin-top: 80px;
    padding: 100px 0px;">
      <div class="container">
        <h3>Hello, <span><?php echo $first_name; ?></span></h3>
      </div>
    </section>
  </body>
</html>
