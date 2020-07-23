<?php

include("connection.php");
error_reporting(0);

 $_GET['id'];
 $_GET['fn'];
 $_GET['ln'];
 $_GET['pa'];
 $_GET['cp'];
 $_GET['mb'];
 $_GET['em'];
 $_GET['gn'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>


    <div class="container">
        <div class="col-lg-8 m-auto d-block">
        

            <form action="" method="GET" name="forms"  class="bg-light mt-5"  >

            <div class="form-group">
                    <label for="">ID</label>
                    <input type="text" name="id" class="form-control" value="<?php echo $_GET['id']; ?>" id="id">
                   
                </div>
                <div class="form-group">
                    <label for="">FISRST NAME</label>
                    <input type="text" name="fname" class="form-control" value="<?php echo $_GET['fn']; ?>" id="user">
                   
                </div>

                <div class="form-group">
                    <label for="">LAST NAME</label>
                    <input type="text" name="lname" class="form-control" value="<?php echo $_GET['ln']; ?>" id="Lname">
                </div>


                
                <div class="form-group">
                    <label for="">password:</label>
                    <input type="text" name="pass" class="form-control" value="<?php echo $_GET['pa']; ?>" id="pass">
                </div>


                
                <div class="form-group">
                    <label for="">Confirm password:</label>
                    <input type="text" name="conpass" class="form-control" value="<?php echo $_GET['cp']; ?>" id="conpass">
                </div>

                <div class="form-group">
                    <label for="">Mobile Number</label>
                    <input type="text" name="mobilenumber" class="form-control" value="<?php echo $_GET['mb']; ?>" id="MobileNumber">
                </div>


                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $_GET['em']; ?>" id="email">
                </div>


                
                <div class="form-group">
                    <label for="">Gender</label></br>
                    
                    <label for="">Male</label>
                    <input type="radio" name="sex" value="Male" value="<?php echo $_GET['gn']; ?>" id="like" />
                    <label for="">Female</label>
                    <input type="radio" name="sex" value="Female" value="<?php echo $_GET['gn']; ?>" id="dislike" />
                    
                </div>
 
                 
                <input type="submit" name="submit" value="update"  class="btn btn-success">
                 
                 



                
            </form>
        </div>

    </div>


<?php

if($_GET['submit'])
{ 
    $id     =    $_GET['id'];
    $fn     =    $_GET['fname'];
    $ln     =    $_GET['lname'];
    $pass   =    $_GET['pass'];
    $conpass =   $_GET['conpass'];
    $mb      =   $_GET['mobilenumber'];
    $em      =   $_GET['email'];
   

      $query = "UPDATE DB  SET FNAME='$fn',LNAME='$ln',PASS='$pass',CPASS='$conpass',MBN='$mb',EMAIL='$em' WHERE ID ='$id' ";
      $data = mysqli_query($conn,$query);
      
      if($data){
       
         echo "<script>alert('record updated succesfuly')</script> <a href='display.php'>check udated list</a>";

      }
      else
      {
          echo "try agib";
      }

}
else{

    echo "button not press";
}



?>



   
    
</body>
<script src="./js/app.js"></script>
</html>