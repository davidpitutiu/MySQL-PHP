<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$name='alphacrm';
$connection=mysqli_connect($hostname,$username,$password,$name);
    $select ="SELECT ID,Salutation,FirstName,LastName,CompanyID FROM tPerson";
    $tPersonQuery=mysqli_query($connection,$select);
    $index=1;
    while($row=mysqli_fetch_array($tPersonQuery,MYSQLI_ASSOC)){
        $Salutation=$row['Salutation'];
        $FirstName=$row['FirstName'];
        $LastName=$row['LastName'];
        $CompanyID=$row['CompanyID'];
        echo $index.' '.$Salutation.' '.$FirstName.' '.$LastName.'[CompanyID '.$CompanyID.' ]<br/>';
        $index++;
    }
    mysqli_free_result($tPersonQuery);
?>