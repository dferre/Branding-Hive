<?php
  session_start();

?>


<!DOCTYPE html>
<html>
  <head>
    <title>The Hive</title>

    <!-- CSS stylesheet-->
    <link rel="stylesheet" href="css/main.css">

    <script>
      function _(x){
        return document.getElementById(x);
      }

      function processStep1(){
      _("step1").style.display = "none";
      _("step2").style.display = "block";
      _("progressBar").style.width = "20%";
      _("status").innerHTML = "2";


      }

      function processStep2(){
        _("step2").style.display = "none";
        _("step3").style.display = "block";
        _("progressBar").style.width = "30%";
        _("status").innerHTML = "3";
      }

      function processStep3(){
        _("step3").style.display = "none";
        _("step4").style.display = "block";
        _("progressBar").style.width = "40%";
        _("status").innerHTML = "4";
      }

      function processStep4(){
        _("step4").style.display = "none";
        _("step5").style.display = "block";
        _("progressBar").style.width = "50%";
        _("status").innerHTML = "5";
      }

      function processStep5(){
        _("step5").style.display = "none";
        _("step6").style.display = "block";
        _("progressBar").style.width = "60%";
        _("status").innerHTML = "6";
      }

      function processStep6(){
        _("step6").style.display = "none";
        _("step7").style.display = "block";
        _("progressBar").style.width = "70%";
        _("status").innerHTML = "7";
      }

      function processStep7(){
        _("step7").style.display = "none";
        _("step8").style.display = "block";
        _("progressBar").style.width = "80%";
        _("status").innerHTML = "8";
      }

      function processStep8(){
        _("step8").style.display = "none";
        _("step9").style.display = "block";
        _("progressBar").style.width = "90%";
        _("status").innerHTML = "9";
      }

      function processStep9(){
        _("step9").style.display = "none";
        _("step10").style.display = "block";
        _("progressBar").style.width = "100%";
        _("status").innerHTML = "10";
      }

      // Go Back
      function backsStep2(){
        _("step2").style.display = "none";
        _("step1").style.display = "block";
        _("progressBar").style.width = "10%";
        _("status").innerHTML = "1";
      }

      function backsStep3(){
        _("step3").style.display = "none";
        _("step2").style.display = "block";
        _("progressBar").style.width = "20%";
        _("status").innerHTML = "2";
      }

      function backsStep4(){
        _("step4").style.display = "none";
        _("step3").style.display = "block";
        _("progressBar").style.width = "30%";
        _("status").innerHTML = "3";
      }

      function backsStep5(){
        _("step5").style.display = "none";
        _("step4").style.display = "block";
        _("progressBar").style.width = "40%";
        _("status").innerHTML = "4";
      }

      function backsStep6(){
        _("step6").style.display = "none";
        _("step5").style.display = "block";
        _("progressBar").style.width = "50%";
        _("status").innerHTML = "5";
      }

      function backsStep7(){
        _("step7").style.display = "none";
        _("step6").style.display = "block";
        _("progressBar").style.width = "60%";
        _("status").innerHTML = "6";
      }

      function backsStep8(){
        _("step8").style.display = "none";
        _("step7").style.display = "block";
        _("progressBar").style.width = "70%";
        _("status").innerHTML = "7";
      }

      function backsStep9(){
        _("step9").style.display = "none";
        _("step8").style.display = "block";
        _("progressBar").style.width = "80%";
        _("status").innerHTML = "8";
      }

      function backsStep10(){
        _("step10").style.display = "none";
        _("step9").style.display = "block";
        _("progressBar").style.width = "90%";
        _("status").innerHTML = "9";
      }

      function submitForm(){
        _("signUp").method = "post";
        _("signUp").action = "includes/signup-action.php";
        _("signUp").submit();

       }




    </script>
  </head>
  <body>
    <nav>
      <div class="container">
      <div class="flex-between">
      <div class="logo"><a href="index.php"><img id="logo" src="images/logo.png" alt="The Branding Hive"></a></div>
        <?php
          if (isset($_SESSION['id'])){
            echo "<form action='includes/logout.php'>
            <div class='logout-button-con' style='position: absolute; right: 45px;  '>
              <button class='yellow'>Log Out</button>
            </div>
            </form>";
          }else{
             echo "<a id='signupbutton' href='signup.php'>Sign Up</a>";
           }


      ?></div></div>
    </nav>
    <!-- Section-->
    <section id="signupform">
      <div class="form-container">
        <div class="progress">
          <div class="progress-status" id="progressBar"></div>
        </div>
        <h5 class="lightspan">Step <span class="greenSpan" id="status">1</span> of 10</h5>
        <form class="mainform" id="signUp" onsubmit="return false">
          <!-- Step 1-->
          <div id="step1">
            <h3>Let’s Create A Brand!</h3>
            <input class="input" id="username" name="username" placeholder="Create A Username:" type="text">
            <input class="input" id="password" name="password" placeholder="Create A Password:" type="password">
            <button class="green" onclick="processStep1()">Next Step</button>
          </div>
          <!-- Step 2-->
          <div id="step2">
            <h3>Personal Profile</h3>
            <div class="fileupload">
              <div class="file"><img src="images/upload.png" alt="Upload Document">
                <input type="hidden" role="uploadcare-uploader"
                data-images-only="true" class="uploader" name="profilePicture"/>
              </div><span class="span" id="upload_file_name">Upload A Profile Picture</span>
            </div>
            <div class="split">
              <div class="split_side">
                <input class="input" id="first_name" name="FirstName" placeholder="First Name:" type="text">
              </div>
              <div class="split_side">
                <input class="input" id="last_name" name="LastName" placeholder="Last Name:" type="text">
              </div>
            </div>
            <input class="input" id="email" name="email" placeholder="Email Address:" type="email">
            <input class="input" id="phone" name="phone" placeholder="Phone Number:" type="text">
            <textarea class="textarea" id="personalBio" name="personalBio" placeholder="Tell us a liitle bit about you:"></textarea>
            <button class="grey" onclick="backsStep2()">Go Back</button>
            <button class="green" onclick="processStep2()">Next Step</button>
          </div>
          <!-- Step 3-->
          <div id="step3">
            <h3>Company Profile</h3>
            <div class="split">
              <div class="split_side">
                <input class="input" id="CompanyLegalName" name="CompanyLegalName" placeholder="Company Legal Name:" type="text">
              </div>
              <div class="split_side">
                <input class="input" id="BrandName" name="BrandName" placeholder="Brand Name:" type="text">
              </div>
            </div>
            <input class="input" id="Address" name="Address" placeholder="Company Address:" type="text">
            <div class="split">
              <div class="split_side">
                <input class="input" id="City" name="City" placeholder="City:" type="text">
              </div>
              <div class="split_side">
                <div class="two">
                  <div class="one">
                    <input class="input" id="State" name="State" placeholder="State:" type="text">
                  </div>
                  <div class="one">
                    <input class="input" id="ZIP" name="ZIP" placeholder="ZIP:" type="text">
                  </div>
                </div>
              </div>
            </div>
            <input class="input" id="Website" name="Website" placeholder="Website:" type="text">
            <div class="split">
              <div class="split_side withimage"><img class="svg" src="images/facebook.svg" alt="alt">
                <input class="input" id="Facebook" name="Facebook" placeholder="Facebook:" type="text">
              </div>
              <div class="split_side withimage"><img class="svg" src="images/twitter.svg" alt="alt">
                <input class="input" id="Twitter" name="Twitter" placeholder="Twitter:" type="text">
              </div>
            </div>
            <div class="split">
              <div class="split_side withimage"><img class="svg" src="images/instagram.svg" alt="alt">
                <input class="input" id="Instagram" name="Instagram" placeholder="Instagram:" type="text">
              </div>
              <div class="split_side withimage"><img class="svg" src="images/linkedin.svg" alt="alt">
                <input class="input" id="LinkedIn" name="LinkedIn" placeholder="LinkedIn:" type="text">
              </div>
            </div>
            <button class="grey" onclick="backsStep3()">Go Back</button>
            <button class="green" onclick="processStep3()">Next Step     </button>
          </div>
          <!-- Step 4-->
          <div id="step4">
            <h3>Brand Profile   </h3>
            <textarea class="textarea" id="BrandHistory" name="BrandHistory" placeholder="Brand History:"></textarea>
            <div class="split">
              <div class="split_side">
                <input class="input" id="Industry" name="Industry" placeholder="Industry:" type="text">
              </div>
              <div class="split_side">
                <input class="input" id="TargetMarket" name="TargetMarket" placeholder="Target Market:" type="text">
              </div>
            </div>
            <h4>Brand Mantra <span class="lightspan">A brand mantra describes your business in four words or less.</span></h4>
            <div class="split">
              <div class="split_side">
                <input class="input" id="Word1" name="Word1" placeholder="Word 1:" type="text">
              </div>
              <div class="split_side">
                <input class="input" id="Word2" name="Word2" placeholder="Word 2:" type="text">
              </div>
            </div>
            <div class="split">
              <div class="split_side">
                <input class="input" id="Word3" name="Word3" placeholder="Word 3:" type="text">
              </div>
              <div class="split_side">
                <input class="input" id="Word4" name="Word4" placeholder="Word 4:" type="text">
              </div>
            </div>
            <h4>Imagination Statement (Mission) <span class="lightspan">We imagine a world where…</span></h4>
            <input class="input" id="ImaginationStatement" name="ImaginationStatement" placeholder="We imagine a world where…" type="text">
            <h4>The Six: Bold Audacious Goals</h4>
            <div class="split">
              <div class="split_side">
                <input class="input" id="Goal1" name="Goal1" placeholder="Goal 1:" type="text">
              </div>
              <div class="split_side">
                <input class="input" id="Goal2" name="Goal2" placeholder="Goal 2:" type="text">
              </div>
            </div>
            <div class="split">
              <div class="split_side">
                <input class="input" id="Goal3" name="Goal3" placeholder="Goal 3:" type="text">
              </div>
              <div class="split_side">
                <input class="input" id="Goal4" name="Goal4" placeholder="Goal 4:" type="text">
              </div>
            </div>
            <div class="split">
              <div class="split_side">
                <input class="input" id="Goal5" name="Goal5" placeholder="Goal 5:" type="text">
              </div>
              <div class="split_side">
                <input class="input" id="Goal6" name="Goal6" placeholder="Goal 6:" type="text">
              </div>
            </div>
            <button class="grey" onclick="backsStep4()">Go Back</button>
            <button class="green" onclick="processStep4()">Next Step </button>
          </div>
          <!-- Step 5-->
          <div id="step5">
            <h3>Brand Style & Standards </h3>
            <h4>Your Brand Visual Identity & Creative Assets </h4>
            <div class="fileupload">
              <div class="file"><img src="images/upload.png" alt="Upload Document">
                <input type="hidden" role="uploadcare-uploader"
                data-images-only="true" class="uploader" name="CompanyLogo"/>
              </div><span class="span" id="upload_file_name">Upload Company Logo</span>
            </div>
            <div class="fileupload">
              <div class="file"><img src="images/upload.png" alt="Upload Document">
                <input type="hidden" role="uploadcare-uploader"
                data-images-only="true" class="uploader" name="BrandStandards"/>
              </div><span class="span" id="upload_file_name">Upload Brand Standards</span>
            </div>
            <div class="fileupload">
              <div class="file"><img src="images/upload.png" alt="Upload Document">
                <input type="hidden" role="uploadcare-uploader"
                data-images-only="true" class="uploader" name="OtherAssets"/>
              </div><span class="span" id="upload_file_name">Upload Other Assets</span>
            </div>
            <h4>Corporate Color Palette</h4>
            <div class="split">
              <div class="split_side">
                <input class="input" id="Color1" name="Color1" placeholder="Pantone Code / CMYK / Hex:" type="text">
              </div>
              <div class="split_side">
                <input class="input" id="Color2" name="Color2" placeholder="Pantone Code / CMYK / Hex:" type="text">
              </div>
            </div>
            <div class="split">
              <div class="split_side">
                <input class="input" id="Color3" name="Color3" placeholder="Pantone Code / CMYK / Hex:" type="text">
              </div>
              <div class="split_side">
                <input class="input" id="Color4" name="Color4" placeholder="Pantone Code / CMYK / Hex:" type="text">
              </div>
            </div>
            <h4>Font Choices</h4>
            <div class="split">
              <div class="split_side">
                <input class="input" id="Font1" name="Font1" placeholder="Font Name:" type="text">
              </div>
              <div class="split_side">
                <input class="input" id="Font2" name="Font2" placeholder="Font Name:" type="text">
              </div>
            </div>
            <button class="grey" onclick="backsStep5()">Go Back</button>
            <button class="green" onclick="processStep5()">Next Step </button>
          </div>
          <!-- Step 6-->
          <div id="step6">
            <h3>Brand Persona </h3>
            <h4>Please provide a list of key words which best describe your brand persona. <br><span class="lightspan">(i.e. Fun, light hearted, goofy, realistic)</span></h4>
            <textarea class="textarea" id="KeyWords" name="KeyWords" placeholder="(i.e. Fun, light hearted, goofy, realistic)"></textarea>
            <h4>Top of mind: When people think…  we want them to think of us first. </h4>
            <textarea class="textarea" id="PeopleThink" name="PeopleThink" placeholder="(i.e. Industry)"></textarea>
            <h4>We are unique on the planet because we are the….  <br><span class="lightspan">(i.e. We are the first to….    We are the only….)  </span></h4>
            <textarea class="textarea" id="Unique" name="Uniqueness" placeholder="(i.e. We are the first to….    We are the only….)"></textarea>
            <button class="grey" onclick="backsStep6()">Go Back</button>
            <button class="green" onclick="processStep6()">Next Step </button>
          </div>
          <!-- Step 7-->
          <div id="step7">
            <h3>Situation Analysis</h3>
            <textarea class="textarea" id="Challenge" name="Challenge" placeholder="Our biggest challenge for this year is…"></textarea>
            <textarea class="textarea" id="OvercomeChallenge" name="OvercomeChallenge" placeholder="We will know we have overcome this challenge when…"></textarea>
            <button class="grey" onclick="backsStep7()">Go Back</button>
            <button class="green" onclick="processStep7()">Next Step </button>
          </div>
          <!-- Step 8-->
          <div id="step8">
            <h3>Competition</h3>
            <h4>The Top Six: Our biggest competition comes from these six<br><span class="lightspan">Enter their website link</span></h4>
            <div class="split">
              <div class="split_side">
                <input class="input" id="Competition1" name="Competition1" placeholder="Website Link:" type="text">
              </div>
              <div class="split_side">
                <input class="input" id="Competition2" name="Competition2" placeholder="Website Link:" type="text">
              </div>
            </div>
            <div class="split">
              <div class="split_side">
                <input class="input" id="Competition3" name="Competition3" placeholder="Website Link:" type="text">
              </div>
              <div class="split_side">
                <input class="input" id="Competition4" name="Competition4" placeholder="Website Link:" type="text">
              </div>
            </div>
            <div class="split">
              <div class="split_side">
                <input class="input" id="Competition5" name="Competition5" placeholder="Website Link:" type="text">
              </div>
              <div class="split_side">
                <input class="input" id="Competition6" name="Competition6" placeholder="Website Link:" type="text">
              </div>
            </div>
            <textarea class="textarea" id="CompetitiveAdvantage" name="CompetitiveAdvantage" placeholder="The one thing we have over all these is… (Competitive advantage)"></textarea>
            <button class="grey" onclick="backsStep8()">Go Back</button>
            <button class="green" onclick="processStep8()">Next Step </button>
          </div>
          <!-- Step 9-->
          <div id="step9">
            <h3>SWOT Analysis</h3>
            <textarea class="textarea" id="Strengths" name="Strengths" placeholder="Strengths"></textarea>
            <textarea class="textarea" id="Weaknesses" name="Weaknesses" placeholder="Weaknesses"></textarea>
            <textarea class="textarea" id="Opportunities" name="Opportunities" placeholder="Opportunities"></textarea>
            <textarea class="textarea" id="Threats" name="Threats" placeholder="Threats"></textarea>
            <button class="grey" onclick="backsStep9()">Go Back</button>
            <button class="green" onclick="processStep9()">Next Step </button>
          </div>
          <!-- Step 2-->
          <div id="step10">
            <h3>Human Interactions</h3>
            <h4>How does your brand reach, inspire and engage?</h4>
            <textarea class="textarea" id="Emotional" name="Emotional" placeholder="Emotional"></textarea>
            <textarea class="textarea" id="Spiritual" name="Spiritual" placeholder="Spiritual (Higher Purpose)"></textarea>
            <textarea class="textarea" id="Functional" name="Functional" placeholder="Functional"></textarea>
            <textarea class="textarea" id="Threats" name="Social" placeholder="Social"></textarea>
            <textarea class="textarea" id="Notes" name="Notes" placeholder="Additional Notes"></textarea>
            <button class="grey" onclick="backsStep10()">Go Back</button>
            <button class="yellow" onclick="submitForm()">View Your Brand!</button>
          </div>
        </form>
      </div>
    </section>
    <script>
      UPLOADCARE_PUBLIC_KEY = "2963bb915e2a790963e2";
    </script>
    <script charset="utf-8" src="//ucarecdn.com/libs/widget/2.10.3/uploadcare.full.min.js"></script>
  </body>
</html>
