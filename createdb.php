<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $connection=mysqli_connect($hostname,$username,$password);
    if($connection)
    {
        echo "Connected </br>";
    }else{
        echo "Failed </br>";
    }
    $SqlCreate="CREATE DATABASE alpha";
    $create=mysqli_query($connection,$SqlCreate);
    if($create)
    {
        echo "Created";
    }else{
        echo "Not Created";
    }
?>