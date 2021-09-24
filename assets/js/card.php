<?php
include "dbConn.php"; // Using database connection file here



$NIC = "Select NIC from user where email = $email" ;

$currentDateTime = date('Y-m-d H:i:s');

if(isset($_POST['submit']))
{		
    $amount = $_POST['amount'];
    

    $insert = mysqli_query($db,"INSERT INTO `reload`('Date','Amount')  VALUES( $currentDateTime , `$amount`) WHERE NIC = $NIC");

    if(!$insert)
    {
        
        echo "<script>document.alert(" Error Try Again! <?php mysqli_error(); ?> ");</script>";
    }
    else
    {
        echo "<script>document.alert(" Records added sucessfilly!");</script>";
    }
}

mysqli_close($db); // Close connection
