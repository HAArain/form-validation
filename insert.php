<?php

include("connection.php");


?>

<?php



$fname =   $_POST['fname'];
$lname =   $_POST['lname'];
$pass  =   $_POST['pass'];
$cpass =   $_POST['conpass'];
$mb    =   $_POST['mobilenumber'];
$email =   $_POST['email'];
$gender =  $_POST['sex'];




  $query = "INSERT INTO `db`(`fname`, `lname`, `pass`, `cpass`, `mbn`, `email`, `gender`) VALUES ('$fname','$lname','$pass','$cpass','$mb','$email','$gender')";
  $data = mysqli_query($conn,$query);

if($data== TRUE){

    echo "data inserted in to databse";
}
else{

    echo "eror";
}

?>
