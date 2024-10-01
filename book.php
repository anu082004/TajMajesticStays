<?php
if(isset($_POST['submit']))
{
    $u1=$_POST['a'];
    $u2=$_POST['b'];
    $u3=$_POST['c'];
   
    $image = $_FILES['image']['tmp_name'];
    $imgData = addslashes(file_get_contents($image));
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"newproject");
    mysqli_query($con,"insert into images values ('$u1','$u2','$u3','$imgData');");    
    header('Location: s.html');
    $con->close();
}
?>