<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $name='alphacrm';
    $connection=mysqli_connect($hostname,$username,$password,$name);

    echo '<form action="output2db.php" method="post">';
        echo 'Enter first name: ';
        echo '<input type="text" name="personFirstName"/>';
        echo 'Enter last name: ';
        echo '<input type="text" name="personLastName"/>';
        echo '<br/><br/>';
        echo '<input type="submit"/>';
    echo '</form>';
?>