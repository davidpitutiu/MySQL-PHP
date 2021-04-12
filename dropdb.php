<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $name='alphacrm';
    $connection=mysqli_connect($hostname,$username,$password);
    if($connection)
    {
        echo "OK";
    }else{
        echo "No";
    }
    $Sql_drop="DROP DATABASE alphacrm";
    $delete=mysqli_query($Sql_drop,$connection);
    if($delete){
        echo "c";
    }else{
        echo "Nc";
    }
?>