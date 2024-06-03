<!doctype html>
<html lang="en">
  <head>
    <title>Welcome to Fit Gurukul</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Fit Gurukul | Real State Business | Buy House | Buy Land">
    <meta name="description" content="Fit Gurukul | Real State Business | Buy House | Buy Land">
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
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,100&display=swap" rel="stylesheet"></head>
  <body>
   <!--header start  -->
   <?php 
   include 'header.php';
   ?>
   <!-- header end -->
   <!-- heading start -->
   <div class="jumbotron jumbotron-fluid" style="margin-bottom: 0;">
    <div class="container text-center">
        <h2 class="display-4">News and Events</h2>
    </div>
   </div>
   <!-- headign end -->
   <!-- mainbody start -->
   <div class="jumbotron jumbotron-fluid" style="margin-bottom: 0px;">
    <div class="container">
        
        <div class="row">
            <?php
            include 'connection.php';
            $query="select * from posts";
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
   <!-- mainbody end -->
   <!-- footer start -->
   <?php 
    include 'footer.php';
   ?>
   <!-- footer end -->
  </body>
</html>