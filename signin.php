<?php
if(isset($_POST['submit']))
{
    $u1=$_POST['a'];
    $u2=$_POST['b'];
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"newproject");
    $query="select * from signup where name='$u1' and password='$u2'";
    $result=$con->query($query);
   
    if($result->num_rows>0)
    {
        header('Location: checkinout.html');
        exit();
    }
    else
  
    {
        header('Location: signup1.html');
        exit();
    }
    $con->close();
}
?>