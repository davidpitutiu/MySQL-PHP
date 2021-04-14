<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $name='alphacrm';
    $connection=mysqli_connect($hostname,$username,$password,$name);
    $update ="UPDATE tCompany SET
                COUNTRY = 'United Kingdom'
                WHERE Country = 'UK'
                ";
    if(mysqli_query($connection,$update)){
        echo "Updated";
    }else{
        echo "Failed";
    }
?>