<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:index.php");
}
else 
{ 
?>
<!-- bootstrap start -->
<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-info">
        <a class="navbar-brand" href="main.php">Dashboard</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                
            </ul>
            <ul class="form-inline my-2 my-lg-0">
            <strong style="color:white; text-transform:uppercase;"> Welcome! 
            <?php echo $_SESSION['username']; ?> &nbsp; &nbsp;
            <a href="logout.php" class="btn btn-danger">Log out</a>
            </strong>
            </ul>
        </div>
    </nav>
    <!-- navbar end -->
    <!-- dashboard area start -->
    <div class="container-fluid" style="margin-top: 40px;">
      <div class="row">
        <div class="col-md-3">
          <a href="users.php" class="btn btn-success btn-block" >Users</a>
          <a href="reservation.php" class="btn btn-success btn-block" >Reservations</a>
          <a href="upload-image.php" class="btn btn-success btn-block" >Upload Image</a>
          <a href="add-post.php" class="btn btn-success btn-block" >Add Posts</a>
        </div>
        <div class="col-md-9">
          <h1>Modify Users</h1>
          <form action="edit-user.php" method="get">
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" name="id1" id="id1" class="form-control" value="<?php echo $_GET['id']; ?>">
            </div>

            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" name="fname1" id="fname1" class="form-control" value="<?php echo $_GET['fname']; ?>">
            </div>

            <div class="form-group">
                <label for="id">Last Name</label>
                <input type="text" name="lname1" id="lname1" class="form-control" value="<?php echo $_GET['lname']; ?>">
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username1" id="username1" class="form-control" value="<?php echo $_GET['username']; ?>">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password1" id="password1" class="form-control" value="<?php echo $_GET['password']; ?>">
            </div>  
            
            <button type="submit" class="btn btn-success btn-lg" name="submit">Update</button>
            <button type="reset" class="btn btn-danger btn-lg">Cancel</button>

          </form>
        </div>
      </div>
    </div>
    <!-- dashboard area end -->

<!-- bootstrap end -->
  </body>
</html>

<?php 
}
?>