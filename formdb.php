<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $name='alphacrm';
    $connection=mysqli_connect($hostname,$username,$password,$name);
    $companyName=$_GET['companyName'];
    echo 'The name sent was: ' .$companyName;
    echo "<br/> <hr/> <br/>";
    echo "<a href='outputdb.php'>Go Back</a>";
?>