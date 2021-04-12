<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $connection=mysqli_connect($hostname,$username,$password);
    $table="CREATE TABLE alphacrm.tCompany(
        ID INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
        preName VARCHAR(50) NOT NULL, 
        firstName VARCHAR(250) NOT NULL, 
        RegType VARCHAR(50) NULL, 
        StreetA VARCHAR(150) NULL, 
        StreetB VARCHAR(150) NULL, 
        StreetC VARCHAR(150) NULL, 
        Town VARCHAR(150) NULL, 
        Country VARCHAR(150) NULL, 
        Postcode VARCHAR(50) NULL, )";
    echo $table;
    $create=mysqli_query($connection,$table);
    if($create){
        echo"OK";
    }else{
        echo "Failed";
    }
?>