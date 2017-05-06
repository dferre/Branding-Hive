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
    <section id="signupform">
      <div class="form-container">
        <form class="mainform" id="login" method="post" action="includes/login.php">
          <!-- Step 1-->
          <div>
            <h3>Let’s Create A Brand!</h3>
            <input class="input" id="username" name="username" placeholder="Username:" type="text">
            <input class="input" id="password" name="password" placeholder="Password:" type="password">
            <button class="yellow" type="submit">Log In</button>
          </div>
        </form>

      </div>
    </section>
  </body>
</html>
