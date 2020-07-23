<style>

td{

    padding:10px;
}

</style>


<?php


include("connection.php");
error_reporting(0);

$query =  "SELECT * FROM `db`";
$data  =  mysqli_query($conn,$query);
$total =  mysqli_num_rows($data);




if($total!=0){


    ?>


  <table border="1" width="80%">

          <tr>
           <td>ID</td>
           <td>FIRST NAME</td>
           <td>LAST NAME</td>
           <td>PASSWORD</td>
           <td>CONFIRM PASSWORD</td>
           <td>Mobile Number</td>
           <td>EMAIL</td>
           <td>GENDER</td>
           <td colspan="2">OPERATION</td>

          </tr>
  

    <?php

    while($result = mysqli_fetch_assoc($data) ){


              echo "<tr>
                      <td>".$result['id']."</td>
                      <td>".$result['fname']."</td>
                      <td>".$result['lname']."</td>
                      <td>".$result['pass']."</td>
                      <td>".$result['cpass']."</td>
                      <td>".$result['mbn']."</td>
                      <td>".$result['email']."</td>
                      <td>".$result['gender']."</td>
                      <td><a href='update.php?id=$result[id]&fn=$result[fname]&ln=$result[lname]&pa=$result[pass]&cp=$result[cpass]&mb=$result[mbn]&em=$result[email]&gn=$result[gender]'>EDIT<a></td>
                      <td><a href='delete.php?id=$result[id]'>DELETE<a></td>
              
                    </tr>";

    }
}

else{

    echo "no record";
}
?>

</table>








