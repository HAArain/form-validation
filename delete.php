<?php
 
include("connection.php");
$id = $_GET['id'];
$query = "DELETE FROM `db` WHERE ID='$id'";

$data = mysqli_query($conn,$query);

if($data){
 
    echo "record delete sucessfuly";

    ?>

    <META HTTP-EQUIV="refresh" CONTENT="0; URL= http://localhost/form/display.php">

    <?php
 
}

else{

     echo "process incomplete";
    
}



?>