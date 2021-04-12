<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $connection=mysqli_connect($hostname,$username,$password);
    $table="CREATE TABLE alphacrm.tCompany(
        ID INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
        preName VARCHAR(50) , 
        Name VARCHAR(250) NOT NULL, 
        RegType VARCHAR(50) NULL, 
        StreetA VARCHAR(150) NULL, 
        StreetB VARCHAR(150) NULL, 
        StreetC VARCHAR(150) NULL, 
        Town VARCHAR(150) NULL, 
        County VARCHAR(150) NULL, 
        Postcode VARCHAR(50) NULL,
        COUNTRY VARCHAR(250) NOT NULL)";
    $create=mysqli_query($connection,$table);
    if($create){
        echo"OK";
    }else{
        echo "Failed";
    }
    $persontable="CREATE TABLE alphacrm.tPerson(
        ID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        Salutation VARCHAR(20) ,
        FirstName VARCHAR(50) ,
        LastName VARCHAR(50) NOT NULL , 
        CompanyID INT(11) NOT NULL )";
    $create2=mysqli_query($connection,$persontable);
    echo "<br/>";
    if($create2)
    {
        echo "OK";
    }else{
        echo "Failed";
    }
?>