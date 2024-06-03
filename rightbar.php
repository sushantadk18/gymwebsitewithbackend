<div class="container">
    <h3>Photo Gallery</h3>
    <a href="gallery.php">
        <img src="assets/images/land.jpg" alt="" class="img-thumbnail">
    </a>
    
    <h3>News and Events</h3>
    <?php
    include 'connection.php';
    $query="select * from posts order by rand() limit 5";
    $run=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($run)){
        $a=$row['id'];
        $b=$row['title'];
        $c=$row['content'];
        $d=$row['image'];
    
    ?>
    <ul>
        <li><a href="post.php?id=<?php echo $a; ?>"><?php echo $b; ?></a></li> 
    </ul>
    <?php 
    }
    ?>

    <h3>Advertisement</h3>
    <img src="assets/images/land.jpg" alt="" class="img-thumbnail">

</div>