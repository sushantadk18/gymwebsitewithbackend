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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <h2 class="display-4">Contact us</h2>
    </div>
   </div>
   <!-- headign end -->
   <!-- mainbody start -->
   <div class="container-fluid bg-white" style="padding: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
            <strong>Fit Gurukul</strong>
            <p><i class="fa fa-map-marker"></i> Bharatpur-10, Chitwan, Nepal</p>
            <p><i class="fa fa-envelope"></i> +977 9855069584</p>
            <p><i class="fa fa-envelope"> </i> Fit.gurukul@gmail.com</p>
            <p><i class="fa fa-globe"></i> <a href="https://www.unitedlimited.com.np">
              www.fitgurukul.com.np</a></p>

            <br><br>
            
            <h2>Send feedback to us:</h2>
            <form action="?" method="post">
                <div class="form-group">
                  <label for="name"><i class="fa fa-user"></i> Your name:</label>
                  <input type="text" class="form-control" name="fname" id="fullname" aria-describedby="helpId" placeholder="Full Name" required>
                </div>

                <div class="form-group">
                  <label for="email"><i class="fa fa-envelope"></i> Email:</label>
                  <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Email" required>
                </div>

                <div class="form-group">
                  <label for="message"><i class="fa fa-comment"></i> Message:</label>
                  <textarea class="form-control" name="message" id="message" rows="3" placeholder="Your messsage here" required></textarea>
                </div>

                <button type="submit" class="btn btn-warning btn-lg" name="submit">Send</button>
                <button type="reset" class="btn btn-danger btn-lg">Cancel</button>                
            </form>
            <?php
            if(isset($_POST['submit']))
            {
              $to='ctit23.sus@ismt.edu.np'; //Your email to receive email
              $name=$_POST['fname'];
              $email=$_POST['email'];
              $subject="Feedback by".$name;
              $message=$_POST['message'];
              $headers="From: $email";
              if(mail($to,$subject, $message, $headers))
              {
                echo "<div class='alert alert-success'>Sent feedback successfully!</div>";
              }
              else
              {
                echo "<div class='alert alert-success'>Not sent!</div>";
              }
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