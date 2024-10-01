<?php

if (isset($_POST['submit'])) {
    
    $u1 = $_POST['a']; // Sanitize input
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con,"newproject");
 
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query to select the data where 'name' matches the input
    $query = "SELECT * FROM images WHERE name = '$u1'";
    $result = $con->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
         echo"<center><h1>Guest Details </h1></center>" ;
         echo"<h1>Profile Details </h1>" ;
     
        echo "<body style='background-color:lavender '><center><table border='2' width='80%'>";
        echo "<tr><td>Name: </td><td>" . $row['name'] . "</td></tr>";
        echo "<tr><td>Address: </td><td>" . $row['address'] . "</td></tr>";
        echo "<tr><td>Phone no.: </td><td>" . $row['phoneno'] . "</td></tr>";

        // Retrieving the image
        echo "<tr><td>Image: </td><td><img src='data:image/jpeg;base64," . base64_encode($row['im']) . "' alt='Image'/></td></tr>";
        echo "</table></center></body><br>";
    } else {
        echo "<script>alert('sorry...,No data matches found');</script>";
    }

    $con->close();
}
?>