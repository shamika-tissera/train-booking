<?php

use function PHPSTORM_META\type;

include("includes/db.php");

if(isset($_GET['list'])){
    $array = explode("," , $_GET['list']) ;
    $amount = $_GET['amount'];
    $id = $_GET['id'];
    $getfrom = "SELECT ffrom,tto FROM `schedule` WHERE train_id= $id;";
    $getfromresult = mysqli_query($conn,$getfrom);
    $fromto = $getfromresult->fetch_assoc();
    $from = $fromto['ffrom'];
    $to = $fromto['tto'];
    //check the balance
    foreach($array as $seat){
        $sql = "INSERT INTO `trip`(`id`, `ffrom`, `tto`, `date`, `time`, `train_id`, `block_id`, `seat_id`) VALUES(null,'$from','$to', CURRENT_DATE ,TIME(NOW()),1,1,$seat);";
        mysqli_query($conn,$sql);
    }
    header('Location: index.php?dashboard');
    
}

?>