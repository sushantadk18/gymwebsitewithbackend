<?php
include '../connection.php';
if(isset($_GET['submit']))
{
    $a=$_GET['id1'];
    $b=$_GET['fname1'];
    $c=$_GET['lname1'];
    $d=$_GET['username1'];
    $e=md5($_GET['password1']);
    $query="update users set first_name='$b', last_name='$c', username='$d', password='$e' where id='$a'";
    $run=mysqli_query($conn,$query);
    if($run)
    {
        header("location:users.php");
    }
    else
    {
        echo "Update not successfull!";
    }
}
?>
<h2>
    <a href="main.php">Go to home &gt; &gt;</a>
</h2>