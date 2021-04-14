<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $name='alphacrm';
    $connection=mysqli_connect($hostname,$username,$password,$name);
    $insert="INSERT INTO tPerson (
        Salutation,
        FirstName,
        LastName,
        CompanyID
    ) 
    VALUES (
        'Mr',
        'Bill',
        'Bloggs',
        '0'

    ),
    (
        'Mrs',
        'Wilhem',
        'Bloggs',
        '1'
    ),
    (
        'Mrs',
        'Hermonie',
        'Hermit',
        '300'
    ),
    (
        'Ms',
        'Sally',
        'Smith',
        '300'
    )";
    if(mysqli_query($connection,$insert)){
        echo "Inserted";
    }else{
        echo "Failed";
    }
?>