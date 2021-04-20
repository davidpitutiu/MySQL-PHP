<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $name='alphacrm';
    $connection=mysqli_connect($hostname,$username,$password,$name);
   
    $preName=$_POST['preName'];
    $companyName=$_POST['companyName'];
    $RegType=$_POST['RegType'];
    $StreetA=$_POST['StreetA'];
    $StreetB=$_POST['StreetB'];
    $StreetC=$_POST['StreetC'];
    $Town=$_POST['Town'];
    $County=$_POST['County'];
    $Postcode=$_POST['Postcode'];
    $COUNTRY=$_POST['COUNTRY'];

    $insert="INSERT INTO tCompany (
        preName, Name, RegType, StreetA,
        StreetB, StreetC, Town, County, Postcode, COUNTRY) VALUES (
        '$preName', '$companyName', '$RegType', '$StreetA',
        '$StreetB', '$StreetC', '$Town', '$County',
        '$Postcode', '$COUNTRY')";
        if(mysqli_query($connection,$insert)){
            echo "Ok";
        }else{
            echo "Failed";
        }
        
    echo "<br/> <hr/> <br/>";
    echo '<a href="CompanySave.php">Go Back</a>';
?>