<?php
include 'connection.php';
if(isset($_GET['Del'])){
    $delid=$_GET['Del'];
    $query="delete from users where id='$delid'";
    $run=mysqli_query($conn,$query);
    if($run){
        header("location:Users.php");
    }
        else{
            echo "<script>alert('unable to delete')<script>";
        }

};
?>