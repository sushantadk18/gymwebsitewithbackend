<!doctype html>
<html lang="en">
  <head>
    <title>Fit Gurukul - News</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- header  -->
    <?php 
    include 'header.php';
    ?>
    <!-- news -->
    <?php
    include 'connection.php';
    if(isset($_GET['id']))//add
    {
    $postid=$_GET['id']; //add
    $query="select * from posts where id='$postid'"; //add
    $run=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($run)){
        $b=$row['title'];
        $c=$row['content'];
        $d=$row['image'];
    ?>
    <!-- news to be post here -->
      <div class="jumbotron" style="margin-bottom:0px">
        <h1 class="display-3"><?php echo $b; ?></h1>
        <hr class="my-2">
        <p><?php echo $c; ?></p>
        <img src="assets/images/<?php echo $d; ?>" alt="" class="img-thumbnail">
      </div>
    <!-- end post -->
      <?php 
    }}//add
    ?>
    <!-- footer -->
    <?php 
    include 'footer.php';
    ?>
  </body>
</html>