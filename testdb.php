<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    
    try{

        $db = new PDO("mysql:dbhost=$hostname;dbname=$username", "$username","$password");
    }catch(PDOException $e)
    {
        echo$e->getMessage();
    }
?>