<?php

include("connection.php");
error_reporting(0);

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
        

            <form action="insert.php" method="post" name="forms" onsubmit="return validation()" class="bg-light mt-5"  >

                <div class="form-group">
                    <label for="">FISRST NAME</label>
                    <input type="text" name="fname" class="form-control" id="user">
                   
                </div>

                <div class="form-group">
                    <label for="">LAST NAME</label>
                    <input type="text" name="lname" class="form-control" id="Lname">
                </div>


                
                <div class="form-group">
                    <label for="">password:</label>
                    <input type="text" name="pass" class="form-control" id="pass">
                </div>


                
                <div class="form-group">
                    <label for="">Confirm password:</label>
                    <input type="text" name="conpass" class="form-control" id="conpass">
                </div>

                <div class="form-group">
                    <label for="">Mobile Number</label>
                    <input type="text" name="mobilenumber" class="form-control" id="MobileNumber">
                </div>


                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" id="email">
                </div>


                
                <div class="form-group">
                    <label for="">Gender</label></br>
                    
                    <label for="">Male</label>
                    <input type="radio" name="sex" value="Male" id="like" />
                    <label for="">Female</label>
                    <input type="radio" name="sex" value="Female" id="dislike" />
                    
                </div>
 
                 
                <input type="submit" value="submit"  class="btn btn-success">
                 
                 



                
            </form>
        </div>

    </div>





   
    
</body>
<script src="./js/app.js"></script>
</html>