<?php
$hostname = 'localhost';
    $username = 'root';
    $password = '';
    $name='alphacrm';
    $connection=mysqli_connect($hostname,$username,$password,$name);
   // $delete="DELETE FROM tPerson WHERE LastName = 'Bloggs'";
    $delete = "DELETE FROM tPerson WHERE CompanyID > '200' ";
   if(mysqli_query($connection,$delete)){
        echo "Succes";
    }else{
        echo "Fail " .mysqli_error($connection);
    }


?>