<!DOCTYPE html>

<html>
    <head>
      <meta charset="utf-8" />
      <title>toanengineering.com</title>
      <link rel="stylesheet" href="style.css">
    </head>

    <body>
      <header>
         <div class="container">
             <div class="nav-wrapper">
                 <div class="left-side">
                     <div class="nav-link-wrapper">
                         <a href="home.html">Home</a>
                     </div>

                     <div class="nav-link-wrapper">
                        <a href="service.html">service</a>
                     </div>

                     <div class="nav-link-wrapper">
                        <a href="training.php">training programs</a>
                     </div>

                     <div class="nav-link-wrapper">
                      <a href="gallery.html">gallery</a>
                     </div>

                     <div class="nav-link-wrapper">
                        <a href="about.html">about</a>
                     </div>

                     <div class="nav-link-wrapper">
                        <a href="contact.php">Contact</a>
                    </div>
                 </div>

                 <div class="right-side">
                     <div class="name">
                         <div>TOAN &REG;</div>
                     </div>
                 </div>
             </div>
         </div>
      </header>

      <main>
        <div class="contact-container">
          <div style="text-align:center">
            <h2>Contact Us</h2>
            <p>Swing by for a Business meeting, or leave us a message:</p>

            <hr>

          </div>
          <div class="contact-row">
            <div class="contact-column">
              <img src="https://www.generationsforpeace.org/wp-content/uploads/2018/07/map-of-nigeria-indicating-the-geopolitical-zones-of-the-country-northern-region.png?w=600" style="width: 100%; align-content: center;">
            </div>
            <div class="contact-column">
              <form action="contact.php" method="POST">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                <label for="number">Phone number</label>
                <input type="text" id="number" name="phone_number" placeholder="Your phone number.." required>
                <label  for="region">Region</label>
                <select id="region" name="region">
                  <option value="south-west">south-west</option>
                  <option value="south-east">south-east</option>
                  <option value="north-west">north-west</option>
                  <option value="north-east">north-east</option>
                  <option value="north-central">north-central</option>
                  <option value="south-south">south-south</option>
                </select>
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." required style="height:170px"></textarea>
                <input name="submit_btn" type="submit" value="Submit">
              </form>
            </div>
          </div>
        </div>
<!-- post method code for contact form -->

        <?php

        require "dbconfig/config.php";


        if(isset($_POST["submit_btn"]))
        {
            //echo "message sent";
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $phone_number = $_POST["phone_number"];
            $region = $_POST["region"];
            $subject = $_POST["subject"];


            $query = "insert into users values('$firstname','$lastname','$phone_number','$region','$subject')";
            $query_run = mysqli_query($con, $query);

            if($query_run)
            {
                echo '<script type="text/javascript"> alert("message sent....your comments means a lot")</script>';
            }
            else
            {
                echo '<script type="text/javascript"> alert("message not sent.....try again later")</script>';
            }


           

        }










    ?>

      </main>
      
    </body>

    <footer style="text-align: center; background-color: gold; padding-top: 2px; padding-bottom: 2px;">
      <div class="footer-bar">

        <div class="footer-text">
            <h2 style="font-family: cursive; color: gold; text-align: left;">Get in touch with Us<h2>
            <p style="color: white; text-align: left; font-family: cursive; font-weight: lighter;
            font-size: 15px;">PORTHARCORT OFFICE<br>Plot 045, Umualoche, Izuoma-Asa, Obigbo LGA, <br>Rivers State.<br><br>
            ENUGU OFFICE <br> ESCET (Metal Workshop), GRA, <br>Abakaliki Express Way Enugu State.
            <br><br> &#9743;CONTACT US<br>WhatsApp Chat<br>08090890195 <br><br>Phone Call<br> 08101313952, 08142318065<br><br> EMAIL US<br>
            info@toanengineering.com</p> 
                       
        </div>

          <div class="bottomleft-side" style="display: grid; text-align: left; padding-top: 5px; font-family: cursive; font-weight: bold;
               padding-bottom: 25px; ">

              <h2 style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue',; color: gold; padding-left: 25px;">Useful links for you</h2>

              <div class="navv-link-wrapper">
                  &#9818;	<a href="home.html">Home</a>
              </div>
           
              <div class="navv-link-wrapper">
                  &#9728;	  <a href="service.html">Service</a>
              </div>

              <div class="navv-link-wrapper">
                  &#9732;	 <a href="training.php">Training Programs</a>
              </div>

              <div class="navv-link-wrapper">
                  &#9775;	 <a href="gallery.html">Gallery</a>
              </div>

              <div class="navv-link-wrapper">
                  &#9787;	  <a href="about.html">about</a>
              </div>

              <div class="navv-link-wrapper">
                  &#9742;		  <a href="contact.php">Contact</a>
             </div>
          </div>

          <div>
              <h2 style="font-family: cursive; color: gold; padding-left: 15px; text-align: center;">Partners and Affiliates</h2>
              <br>
              <div style="display: grid; justify-content: space-between;">
                  <div style="display: flex; justify-content: space-between;">
                      <div >
                          <img src="C:\Users\USER\toanengineering.com\image\crop-2020-7-11.jpg" width="50%">
                      </div>
                      <div>
                          <img src="C:\Users\USER\toanengineering.com\image\escet.jpg" width="50%">
                      </div>
                  </div>

                  <div style="display: flex; justify-content: space-between;">
                      <div>
                          <img src="C:\Users\USER\toanengineering.com\image\proda.jpg" width="50%">
                      </div>
                      <div>
                          <img src="C:\Users\USER\toanengineering.com\image\crop-2020-7-11 (1).jpg" width="50%">
                      </div>
                  </div>
              </div>
          </div>
      </div>


      <div>
          <p>&#xA9; copyright 2020</p>
          <p style="color: blue;"> &#05; powered by ParaTech &#05; </p>
      </div>
  </footer>
  
























</html>