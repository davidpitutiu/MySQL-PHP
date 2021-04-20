<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $name='alphacrm';
    $connection=mysqli_connect($hostname,$username,$password,$name);


    $getValue="TMIT%20World%20Limited";
    echo  "<a href='formdb.php?CompanyName='.$getValue '>Send Company Name </a>";
?>