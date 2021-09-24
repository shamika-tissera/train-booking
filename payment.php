<?php

use function PHPSTORM_META\type;

include("includes/db.php");

if(isset($_GET['list'])){
    $array = explode("," , $_GET['list']) ;
    //check the balance
    
    foreach($array as $seat){
        $sql = "INSERT INTO `trip`(`id`, `ffrom`, `tto`, `date`, `time`, `train_id`, `block_id`, `seat_id`) VALUES(null,'Colombo','Maradana','2021-09-07','12:50:32',1,1,$seat);";
        mysqli_query($conn,$sql);
    }
    
}

?>