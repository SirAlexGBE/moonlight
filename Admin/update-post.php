<?php
include 'connection.php';
if(isset($_GET['submit']))
{
    echo $a=$_GET['id1'];
    echo $b=$_GET['title1'];
    echo $c=$_GET['content1'];
    echo $d=$_GET['image1'];
    $query="update posts set title='$b', content='$c', image='$d' where id='$a'";
    $run=mysqli_query($conn,$query);
    if($run)
    {
        header("location:view-post.php");
    }
    else
    {
        echo "<script>window.alert('Not updated')</script>";
    }

}
?>