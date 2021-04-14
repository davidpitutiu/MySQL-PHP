<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $name='alphacrm';
    $connection=mysqli_connect($hostname,$username,$password,$name);
    $insert="INSERT INTO tCompany( preName, Name, RegType, StreetA, StreetB, StreetC, Town, County, Postcode, COUNTRY ) VALUES ( 'The', 'Pie Company', '', '89 Gravy Road', '', '', 'Pastryville', 'NSW', '1297', 'Australia' ), ( '', 'TMIT World', 'Limited', '42 Lily Close', '', '', 'Bicester', 'Oxfordshire', 'OX26 3EJ', 'UK' ), ( '', 'JACASTA', 'Limited', '42 Lily Close', '', '', 'Bicester', 'Oxfordshire', 'OX26 3EJ', 'UK' )";
            echo $insert;
        if(mysqli_query($connection,$insert))
        {
            echo "Works";
        }else{
            echo "Doesn't work";
           
        }
?>