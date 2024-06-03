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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
        <h2 class="display-4">Bookings</h2>
    </div>
   </div>
   <!-- headign end -->
   <!-- mainbody start -->
   <div class="container-fluid bg-white" style="padding: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
            <form action="?" method="post">
                <!-- first name -->
                <div class="form-group">
                  <label for="FirstName"><i class="fa fa-user"></i> First Name:</label>
                  <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required>
                </div>

                <!-- last name -->
                <div class="form-group">
                  <label for="LastName"><i class="fa fa-user"></i>  Last Name:</label>
                  <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required>
                </div>

                <!-- address -->
                <div class="form-group">
                  <label for="address"><i class="fa fa-address-book"></i>  Address:</label>
                  <input type="text" class="form-control" name="address" id="address" placeholder="Address" required>
                </div>

                <!-- city -->
                <div class="form-group">
                  <label for="city"><i class="fa fa-address-card"></i> City:</label>
                  <input type="text" class="form-control" name="city" id="city" placeholder="City">
                </div>

                <!-- country -->
                <div class="form-group">
                  <label for="country"><i class="fa fa-flag"></i> Country:</label>
                  <input type="text" class="form-control" name="country" id="country" placeholder="Nepal" required>
                </div>

                <!-- phone -->
                <div class="form-group">
                  <label for="phone"><i class="fa fa-phone-square"></i> Phone:</label>
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="+977 9800000000" required>
                </div>

                <!-- email -->
                <div class="form-group">
                  <label for="email"><i class="fa fa-envelope"></i> Email:</label>
                  <input type="text" class="form-control" name="email" id="email" placeholder="sample@mail.com" required>
                </div>

                <!-- no. of order  -->
                <div class="form-group">
                  <label for="booking"><i class="fa fa-cart-plus"></i> Booking:</label>
                  <select name="booking" id="booking" class="form-control">
                    <option value="Basic Membership">Basic Membership</option>
                    <option value="Zumbastic Membership">Zumbasitic Membership</option>
                    <option value="Yogastic Membership">Yogastic Membership</option>
                    <option value="Elite">Elite</option>
                    <option value="Sauna">Sauna</option>
                    <option value="Platinum Membership">Platinum Membership</option>
                    <option value="Personal Trainer">Personal Trainer</option>
                  </select>
                </div>

                <!-- buttons -->
                <button type="submit" name="submit" class="btn btn-success btn-lg">Send</button>
                <button type="reset" class="btn btn-danger btn-lg">Cancel</button>
                
            </form>
            <?php
            include 'connection.php';
            if(isset($_POST['submit']))
            {
              $a=$_POST['fname'];
              $b=$_POST['lname'];
              $c=$_POST['address'];
              $d=$_POST['city'];
              $e=$_POST['country'];
              $f=$_POST['phone'];
              $g=$_POST['email'];
              $h=$_POST['booking'];
              
            $query="insert into reservation(first_name, last_name, address, city, country, phone, email, booking)values('$a','$b','$c','$d','$e','$f','$g','$h')";
            $run=mysqli_query($conn,$query);
            
            if($run)
            {
              echo "<script>window.alert('Reservation Successfull!')</script>";
              echo "<script>window.open('book-now.php','_self')</script>";
              
            }
            else
            {
              echo "<script>window.alert('Not Success! Try Again')</script>";
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