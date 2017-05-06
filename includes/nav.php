<nav>
  <div class="container">
  <div class="flex-between">
    <?php
      if (isset($_SESSION['id'])){
        echo "
        <div class='profilePicture'>
          <div class='profilePic'>
            <img id='ppp' src='images/defaultProfilePic.png' style='width: 55px'>
          </div>
          <div class='profile_info' style='color: #9B9B9B;font-size: 14px;font-weight: 300;'>
            <span class='namespan'>McKay </span><span class='namespan'>Ferre</span>
          </div>
        </div>
        ";

        }else{
          echo "
          <div class='logo'>
            <a href='index.php'>
              <img id='logo' src='images/logo.png' alt='The Branding Hive'>
            </a>
          </div>
          ";
        }?>
      
      <?php
      if (isset($_SESSION['id'])){
        echo "
        <form action='includes/logout.php'>
          <div class='logout-button-con'>
            <button class='yellow'  style='margin: 0px'>Log Out</button>
          </div>
        </form>
        ";
      }else{
         echo "<a id='signupbutton' href='signup.php'>Sign Up</a>";
       }


  ?></div></div>
</nav>
