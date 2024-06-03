<!doctype html>
<html lang="en">
  <head>
    <title>Welcome to Fit Gurukul</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Fit Gurukul | Zumba | Yoga | Sauna">
    <meta name="description" content="Fit Gurukul | Zumba classes | Yoga classes | Sauna classes">
    <meta name="author" content="Sushant Adhikari">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,100&display=swap" rel="stylesheet">
</head>
  <body>
   <!--header start  -->
   <?php 
   include 'header.php';
   ?>
   <!-- header end -->
   
   <!-- slide start -->
   <div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="assets/images/fitness-guru-1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Welcome to Fit Gurukul</h3>
                <p>One of the best fitness center in Nepal</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/fitness-guru-zumba.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Zumba</h3>
                <p>We offer zumba classes in affordable price</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/fitness-guru-yoga.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Yoga</h3>
                <p>We offer yoga classes with best gurus</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
   </div>
   <!-- slide end -->
   <!-- welcome area start -->
   <div class="jumbotron jumbotron-fluid text-center" style="margin-bottom: 0px;">
    <div class="container">
        <h1 class="display-4">Welcome to Fit Gurukul</h1>
        <hr class="my-2">
        <p>In a world where health and well-being have become paramount concerns for individuals from all walks of life, the quest for physical and mental fitness has never been more crucial. Amidst this growing awareness, the Fit Gurukul have emerged as a beacon of holistic wellness, offering a comprehensive suite of services designed to empower individuals on their journey towards a healthier, happier life.</p>
        <p class="lead">
            <a class="btn btn-warning btn-lg" href="about-us.php" role="button">Read More </a>
        </p>
    </div>
   </div>
   <!-- welcome area end -->
   <!-- offer area start -->
   <div class="container-fluid" style="background-color: white; padding: 20px;">
        <div class="container text-center">
            <h2 class="display-4 text-center">We offer</h2>
            <p>We offer Zumba, Yoga and Sauna services </p>
            <div class="row">
                <div class="col-md-4">
                    <h3>Basic Membership</h3>
                    <p>For the basic membership in Fit Gurukul</p>
                    <img src="assets/images/7.jpg" alt="home" class="img-thumbnail">
                    <p>Price: Rs. 3000</p>
                    <a href="book-now.php" class="btn btn-danger">Register Now</a>
                </div>
                <div class="col-md-4">
                    <h3>Zumbastic Membership</h3>
                    <p>For basic gym + 4 classes a week zumba</p>
                    <img src="assets/images/2.jpg" alt="land" class="img-thumbnail">
                    <p>Price: Rs. 5000</p>
                    <a href="book-now.php" class="btn btn-danger">Register Now</a>
                </div>
                <div class="col-md-4">
                    <h3>Yogastic Membership</h3>
                    <p>For basic gym + 4 classes</p>
                    <img src="assets/images/3.jpg" alt="road" class="img-thumbnail">
                    <p>Price: Rs. 5000</p>
                    <a href="book-now.php" class="btn btn-danger">Register Now</a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <h3>Elite</h3>
                    <p>For the Unlimited classes, GYM- Zumba + Yoga</p>
                    <img src="assets/images/6.jpg" alt="home" class="img-thumbnail">
                    <p>Price: Rs. 8000</p>
                    <a href="book-now.php" class="btn btn-danger">Register Now</a>
                </div>
                <div class="col-md-4">
                    <h3>Sauna/Steam</h3>
                    <p>For Sauna/Steam (per use)</p>
                    <img src="assets/images/8.jpg" alt="land" class="img-thumbnail">
                    <p>Price: Rs. 1500</p>
                    <a href="book-now.php" class="btn btn-danger">Register Now</a>
                </div>
                <div class="col-md-4">
                    <h3>Platinum Membership</h3>
                    <p>For unlimited access to all facilities</p>
                    <img src="assets/images/7.jpg" alt="road" class="img-thumbnail">
                    <p>Price: Rs. 12000</p>
                    <a href="book-now.php" class="btn btn-danger">Register Now</a>
                </div>
            </div>
        </div>
   </div>
   <!-- offer area end -->
   <!-- news area start -->
   <div class="jumbotron jumbotron-fluid" style="margin-bottom: 0px;">
    <div class="container">
        <h2 class="display-4 text-center">News and Events</h2>
        <hr class="my-2">
        <div class="row">
            <?php
            include 'connection.php';
            $query="select * from posts order by rand() limit 3";
            $run=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($run))
            {
                $a=$row['id'];
                $b=$row['title'];
                $c=substr($row['content'],0,300);
                $d=$row['image'];
            
            ?>
            <div class="col-md-9">
                <h3><?php echo $b; ?></h3>
                <p>
                    <?php echo $c; ?> .........................
                </p>
                <p>
                    <a href="post.php?id=<?php echo $a; ?>" class="btn btn-warning">Read More</a>
                </p>
            </div>
            <div class="col-md-3">
                <img src="assets/images/<?php echo $d; ?>" alt="flood-victim" class="img-thumbnail">
            </div>
            <?php 
            }
            ?>
            
        </div>
    </div>
   </div>
   <!-- news area end -->
   <!-- private trainer area start -->
   <div class="container-fluid" style="background-color: white; padding: 40px 0px;">
        <div class="container">
            <h2 class="display-4">Do you want to hire Private Trainer?</h2>
            <p>
                Our private trainer services provide personalized fitness guidance tailored to your unique goals and needs. Our certified trainers offer one-on-one sessions to maximize your results, focusing on strength, flexibility, weight management, and overall well-being. Whether you're a beginner or an experienced fitness enthusiast, our private trainers will create a customized workout plan, track your progress, and provide expert guidance to help you achieve your fitness aspirations efficiently and safely. Elevate your fitness journey with our dedicated private trainers.
            </p>
            <p>Price Rs. 10000</p>
            <a href="book-now.php" class="btn btn-outline-danger">Register Now</a>
        </div>
   </div>
   <!-- private trainer area end -->
   <!-- footer start -->
   <?php 
    include 'footer.php';
   ?>
   <!-- footer end -->
  </body>
</html>