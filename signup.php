<?php
if(isset($_POST['submit']))
{
    $u1=$_POST['a'];
    $u2=$_POST['b'];
    $u3=$_POST['c'];
    $u4=$_POST['d'];
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"newproject");
    mysqli_query($con,"insert into signup values('$u1','$u2','$u3','$u4');");
    header('Location: checkinout.html');
    exit();
    $con->close();
}
?>