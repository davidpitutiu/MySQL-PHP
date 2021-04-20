<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $name='alphacrm';
    $connection=mysqli_connect($hostname,$username,$password,$name);
    $personFirstName=$_POST['personFirstName'];
    $personLastName=$_POST['personLastName'];
    echo "The name you entered was: " .$personFirstName." ".$personLastName;
        echo "<br/> <hr/> <br/>";
        echo '<a href="postdb.php">Go Back</a>';
?>