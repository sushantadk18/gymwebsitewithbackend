<!doctype html>
<html lang="en">
  <head>
    <title>Welcome to Fit Gurukul</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Fit Gurukul">
    <meta name="description" content="Fit Gurukul">
    <meta name="author" content="Sushant Adhikari">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
   <!-- heading start -->
   <div class="jumbotron jumbotron-fluid" style="margin-bottom: 0;">
    <div class="container text-center">
        <h2 class="display-4">Videos</h2>
    </div>
   </div>
   <!-- heading end -->
   <!-- mainbody start -->
   <div class="container-fluid bg-white" style="padding: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
            <?php 
            //creating variable
            $dir=glob('assets/video/{*.mp4}',GLOB_BRACE);
            //loop start
            foreach($dir as $value)
            {
            ?>
            <!-- photo insert -->
            <a href="<?php echo $value; ?>">
                <!-- 
                    <video src="<?php echo $value; ?>" alt="Real State" width="300px" align="left" hspace="5px" vspace="5px"> 
                -->
                <video width="640px" height="280px" controls>
                    <source src="<?php echo $value; ?>" type="video/mp4">
                </video>

            </a>
            <!-- loop end -->
            <?php
            }
            ?>
            </div>
            <div class="col-md-3">
                <?php
                include 'rightbar.php';
                ?>
            </div>
        </div>
    </div>
   </div>
   <!-- mainbody end -->
   <!-- footer start -->
   <?php 
    include 'footer.php';
   ?>
   <!-- footer end -->
  </body>
</html>