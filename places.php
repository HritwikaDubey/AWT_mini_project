<?php

include 'config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
    $name = $_POST['name']; // Get Name from form
    $email = $_POST['email']; // Get Email from form
    $comment = $_POST['comment']; // Get Comment from form

    $sql = "INSERT INTO comments (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
    $result = mysqli_query($conn, $sql);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encircle MITWPU |Places</title>
    <link rel="icon" href="earth-globe.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">



    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/logo.css">
    <link rel="stylesheet" href="css/comment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Mulish:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" integrity="sha512-i8+QythOYyQke6XbStjt9T4yQHhhM+9Y9yTY1fOxoDQwsQpKMEpIoSQZ8mVomtnVCf9PBvoQDnKl06gGOOD19Q==" crossorigin="anonymous" />




</head>
<style>
    .hovereffects {
        width: 100%;
        height: 100%;
        overflow: hidden;
        position: relative;
        text-align: center;
        cursor: default;
        margin-bottom: 10px;
        box-shadow: 1px 2px 5px white;
    }

    .hovereffects .overlay {
        width: 100%;
        height: 100%;
        position: absolute;
        overflow: hidden;
        top: 0;
        left: 0;
        opacity: 0;
        background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.845), rgba(143, 141, 141, 0));
        -webkit-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out
    }

    .hovereffects img {
        display: block;
        position: relative;
        -webkit-transition: all .4s linear;
        transition: all .4s linear;
    }

    .hovereffects h2 {
        text-transform: uppercase;
        color: #fff;
        position: absolute;
        bottom: 40px;
        left: 19px;
        font-size: 25px;
        -webkit-transform: translateY(-100px);
        -ms-transform: translateY(-100px);
        transform: translateY(-100px);
        -webkit-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;

    }

    .hovereffects a.info {
        text-decoration: none;

        position: absolute;
        bottom: 10px;
        left: 19px;
        text-transform: uppercase;
        color: #fff;
        border: 1px solid #fff;
        background-color: transparent;
        opacity: 0;
        filter: alpha(opacity=0);
        -webkit-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
        padding: 6px 12px;
    }

    .hovereffects a.info:hover {
        box-shadow: 0 0 5px #fff;

    }

    .hovereffects:hover img {
        -ms-transform: scale(1.2);
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
    }

    .hovereffects:hover .overlay {
        opacity: 1;
        filter: alpha(opacity=100);
    }

    .hovereffects:hover h2,
    .hovereffects:hover a.info {
        opacity: 1;
        filter: alpha(opacity=100);
        -ms-transform: translateY(0);
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }

    .hovereffects:hover a.info {
        -webkit-transition-delay: .2s;
        transition-delay: .2s;
    }






    body,
    html {

        background-color: #3f444ed0;
    }


    .place_txt {
        position: relative;
        top: 4%;
        width: 100%;
        text-align: center;
        color: #000;
        font-size: 40px;
        letter-spacing: 15px;
        text-transform: uppercase;
    }


    .place_txt .border {
        background-color: rgb(0, 0, 0);
        background-position: 50%;
        color: #fff;
        padding: 20px;
    }
</style>

<body>
    <!-- <style>
        ::-webkit-scrollbar {
            display: none;
        }
        .logo{
        width: 180px;
        position: absolute;
        margin-top: 4px;
        margin-left: -95px;
        display: inline-block;}

  </style>  -->


    <div class="container_1">
        <img src="Images/ENCIRCLE MITWPU.png" class="logo">
        <div class="menu">
            <ul>
                <li class="li1"><a href="index.php">Home</a></li>
                <li class="li2"><a href="places.php" style="text-decoration:rgb(38, 191, 202) 3px underline; cursor: none;">Places</a></li>
                <li class="li1"><a href="about.html">About Us</a></li>
                <li class="li1"><a href="contact.html">Contact</a></li>

            </ul>
        </div>

        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script>

        </script>
    </div>



    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    </div>

    <br><br>
    <div class="place_txt">
        <span class="border">
            Places
        </span>
    </div>



    <br><br>
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffects">

                    <img src="images/groceries_3.jpg" height="300px" width="100%" alt="images">
                    <div class="overlay">
                        <h2>Shopping and Groceries</h2>
                        <a class="info" href="groceries.html">more info</a>
                    </div>
                </div>

            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffects">
                    <img src="images/restaurant_5.jpg" height="300px" width="100%" alt="images">
                    <div class="overlay">
                        <h2>Restaurants</h2>
                        <a class="info" href="restaurant.html">more info</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffects">
                    <img src="images/MetroCity_3.jpg" height="300px" width="100%" alt="images">
                    <div class="overlay">
                        <h2>Sports and Health Facilities</h2>
                        <a class="info" href="sports.html">more info</a>
                    </div>
                </div>

            </div>


        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffects">
                    <img src="images/movie_3.jpg" height="300px" width="100%" alt="images">
                    <div class="overlay">
                        <h2>Movies</h2>
                        <a class="info" href="movie.html">more info</a>
                    </div>
                </div>
            </div>



            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffects">
                    <img src="images/Vetal_tekdi_1.jpg" height="300px" width="100%" alt="images">
                    <div class="overlay">
                        <h2>Nature</h2>
                        <a class="info" href="nature.html">more info</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffects">
                    <img src="images/emergency_7.jpg" height="300px" width="100%" alt="images">
                    <div class="overlay">
                        <h2>The Emergency Services</h2>
                        <a class="info" href="emergency.html">more info</a>
                    </div>
                </div>
                <br><br><br><br><br>
                
            </div>
        </div>
        <div class="wrapper">
		<form action="" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Enter your Name" required>
				</div>
				<div class="input-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="Enter your Email" required>
				</div>
			</div>
			<div class="input-group textarea">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Comment</button>
			</div>
		</form>
		<div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row['name']; ?></h4>
				<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
				<p><?php echo $row['comment']; ?></p>
			</div>
			<?php

				}
			}
			
			?>
		</div>
	
    </div>
    </div>
</body>

</html>