<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $connection=mysqli_connect($hostname,$username,$password);
    $table="CREATE TABLE alphacrm.tCompany(";
    $table.="ID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, ";
    $table.="preName VARCHAR(50) , ";
    $table.="Name VARCHAR(250) NOT NULL, ";
    $table.="RegType VARCHAR(50) NULL, ";
    $table.="StreetA VARCHAR(150) NULL, ";
    $table.="StreetB VARCHAR(150) NULL, ";
    $table.="StreetC VARCHAR(150) NULL, ";
    $table.="Town VARCHAR(150) NULL, ";
    $table.="Country VARCHAR(150) NULL, ";
    $table.="Postcode VARCHAR(50) NULL, ";
    $table.="COUNTRY VARCHAR(250) NOT NULL";
    $table.=")";
    $create=mysqli_query($connection,$table);
    if($create){
        echo"OK";
    }else{
        echo "Failed";
    }
?>