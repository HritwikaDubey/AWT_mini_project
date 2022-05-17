<?php
include 'config.php';

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
  }

// echo $_SESSION['user_id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encircle MITWPU</title>
    <link rel = "icon" href ="earth-globe.png" type = "image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Mulish:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" 
    rel="stylesheet">

    <!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" integrity="sha512-i8+QythOYyQke6XbStjt9T4yQHhhM+9Y9yTY1fOxoDQwsQpKMEpIoSQZ8mVomtnVCf9PBvoQDnKl06gGOOD19Q==" crossorigin="anonymous" />

</head>
<body>
   
  <div class="container">
    <img src="Images/ENCIRCLE MITWPU.png" class="logo">
    <div class="menu">
        <ul>
                    
                <li><a href="index.php">Home</a></li>
                <li><a href="places.php">Places</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
                <i class="fa fa-sun-o  sun" aria-hidden="true"  onclick="openForm()"></i>
                
        </ul>
    </div>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script>
        
    </script>
</div>


<button onclick="topFunction()" id="myBtn" title="Go to top" style="height: 45px; width: 45px;"><i class="fas fa-arrow-up"></i></button>

<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>


<!-- view -->


<section class="text-gray-600 body-font relative" style="height: 85%;">
    <div class="absolute inset-0 bg-gray-300">
      <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="mit" scrolling="no" src="http://www.iviewd.com/mit_pune/index.html"></iframe>
    </div>
    <div class="container px-5 py-24 mx-auto flex">
    <div class="form-popup" style=" background-color: #ffffff;" id="myForm">
      <form class="form-container" style=" background-color: #1a202c;">
        <h3 style="color: #ffffff; font-weight: bolder; margin: 9px -20px -3px 15px; margin-top: 10px; font-size: x-large;">WEATHER <br> Report</h3>
        <button type="button" style="float: right; margin-top: -75px; margin-right: 10px; color: #ffffff;" class="btn cancel" onclick="closeForm()"><i class="fa fa-close"></i></button>
        <!-- <a target="_blank" href="https://www.booked.net/weather/pune-2119">
                    <img src="https://w.bookcdn.com/weather/picture/32_2119_1_1_34495e_250_2c3e50_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=w209&anc_id=35058"  alt="booked.net" />
                </a>weather widget end -->
                <br>        
                <a style="background-color: yellow;" class="weatherwidget-io" href="https://forecast7.com/en/18d5173d81/kothrud/" data-label_1="MITWPU" data-label_2="KOTHRUD WEATHER" data-icons="Climacons Animated" data-days="3" data-theme="original" >MITWPU KOTHRUD WEATHER</a>
            <br>
                <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>
        
      </form>
    </div>
    <!--  -->
    
        <div class="txt_1">
            <span class="border">
                Encircle MITWPU
            </span>
        </div>
    </div>
  </section>

<!-- view end -->





<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<section class="section section-light">
    <h2> <b> <u> <strong>   MITWPU </strong>  </u> </h2> <br>
    <p>
        MITWPU is one of the renowned colleges in Maharashtra state. 
        Many students come here from all over India and also from outside of our country to get 
        quality education from dedicated and passionate teachers. 
        Pune is a known as “Budget Mumbai” because its one of the big cities in India and 
        a hub for students getting education from eminent colleges like MITWPU. 
        The Encircle MITWPU has been created to serve as tour guide for all the 
        students who are enrolled here and has left the warmth of their homes to attain a 
        dazzling career. This website will help all those students to know their new surrounding 
        which will make them all to feel at home. It is very important for all of us to 
        get acquainted with our neighborhood for getting all our work done and help us to 
        get over feeling homesick. In this website users will be able to get in touch with 
        divergent places like, sports and health facilities, grocery stores, where they can shop,
         restaurants, all of this near MITWPU where all the other students usually visit.
         This website will try to ease the problems encountered by newcomers like this will 
         not only help them know different places usually their fellow classmates or seniors 
         visit but also it will give them this insight they are not alone in this big city away 
         from their families. Furthermore, this website will help users to get in touch with all 
         the facilities provided by our college and also all the other low and high profile places 
         situated near MITWPU.
         Getting to know students from are college, bonding with them, helping them and to take 
         help from them. That's how communities are formed with positive environment.
    </p> </b>
</section>

<div class="img_2">
    <div class="txt_1">
        <span class="border trans">
            The Unofficial Student Hub of Pune city
        </span>
    </div>
</div>

<section class="section section-dark">
    <h2> <b> <u> <strong>   </strong> </u>  </h2> <br>
    <p>
        This website will try to ease the problems encountered by newcomers like this will 
        not only help them know different places usually their fellow classmates or seniors 
        visit but also it will give them this insight they are not alone in this big city away 
        from their families. Furthermore, this website will help users to get in touch with all 
        the facilities provided by our college and also all the other low and high profile places 
        situated near MITWPU.
        Getting to know students from are college, bonding with them, helping them and to take 
        help from them. That’s how communities are formed with positive environment.
        </b>
    </p>
</section>


<div class="img_3">
    <div class="txt_1">
        <span class="border trans">
            EAT / SHOP / STAY
        </span>
    </div>
</div>

<section class="section section-dark">
    <h2> <b> <u>  KHAO GALLI IN KOTHRUD IS EVERY FOODIE'S DREAM COME TRUE.</u> </h2> <br>
    <p>
        Kothrud, Pune the place where you find calmness. 
        This place has almost everything that a city would need, every branded shop you 
        could think of, be it of food or sports accessories or some clothes. 
        It is a perfect blend of all these places. Here, there are tons of food outlets, 
        every alternate shop has to do something with food. 
        It even has many small outlets, some of which are old and famous and 
        some are new but good enough to compete with others.  
        The Karishma society lane in Kothrud is fast turning into a Khau Galli,
         with restaurants and cafes mushrooming all over the street.
    </p> </b>
</section>






<section class="team" id="team">
                <div class="section-header">
                    <h2 class="section-heading">Our Team</h2>
                    <div class="underline"></div>
                </div>
                <!-- ---------------- -->
                    <div class="containerN">
                        <div class="card">
                            <div class="content">
                                <div class="imgBx"><img src="Images/girl.svg"></div>
                                <div class="contentBx">
                                    <h2>Ishika Tiwari</h2>
                                     <h3>DIV B</h3>
                                </div>
                            </div>
                            <ul class="sci">
                             <li>
                                 <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                             </li>
                             <li>
                                <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                            </li>
                         </ul>
                        </div>

                        <div class="card">
                            <div class="content">
                                <div class="imgBx"><img src="Images/boy.svg"></div>
                                <div class="contentBx">
                                    <h2>Dheeraj Solankar</h2>
                            <h3>DIV B</h3>
                                </div>
                            </div>
                            <ul class="sci">
                             <li >
                                 <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                             </li>
                             <li>
                                <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                            </li>
                         </ul>
                        </div>

                        <div class="card">
                            <div class="content">
                                <div class="imgBx"><img src="Images/girl.svg"></div>
                                <div class="contentBx">
                                    <h2>Hritwika Dubey</h2>
                                    <h3>DIV B</h3>
                                </div>
                            </div>
                            <ul class="sci">
                             <li>
                                 <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                             </li>
                             <li>
                                <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                            </li>
                         </ul>
                        </div>

                    </div>
                </section>

<!-- <section class="section section-light">
    <h2>About Us</h2>
    <p>
        MITWPU is one of the renowned colleges in Maharashtra state. 
        Many students come here from all over India and also from outside of our country to get 
        quality education from dedicated and passionate teachers. 
        Pune is a known as “Budget Mumbai” because it’s one of the big cities in India and 
        a hub for students getting education from eminent colleges like MITWPU. 
    </p>
</section> -->

<div class="img_1">
    <div class="txt_1">
        <span class="border">
            Encircle MITWPU
        </span>
    </div>
</div>

<footer style="font-size: small; font-weight: 400; color: rgb(255, 255, 255);  display: flex;
align-items: center;
background-size: 100% 100%;
justify-content: center;">
 Copyright © 2022 EnCircle MITWPU All rights reserved.</centre>
</footer>

</body>
</html>


