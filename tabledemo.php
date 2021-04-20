<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$name='alphacrm';
$connection=mysqli_connect($hostname,$username,$password,$name);
    $select ="SELECT ID,Salutation,FirstName,LastName,CompanyID FROM tPerson";
    $tPersonQuery=mysqli_query($connection,$select);
    echo "<table border='1'>";
    echo "<tr>";
        echo "<td>#</td>";
        echo "<td>Salut</td>";
        echo "<td>FirstName</td>";
        echo "<td>LastName</td>";
        echo "<td>Company</td>";
    echo "</tr>";

    $index=1;
    while($row=mysqli_fetch_array($tPersonQuery,MYSQLI_ASSOC)){
        $Salutation=$row['Salutation'];
        $FirstName=$row['FirstName'];
        $LastName=$row['LastName'];
        $CompanyID=$row['CompanyID'];
         echo "<tr>";
        echo "<td>$index</td>";
        echo "<td>$Salutation</td>";
        echo "<td>$FirstName</td>";
        echo "<td>$LastName</td>";
        echo "<td>$CompanyID</td>";
        echo "</tr>";
        $index++;    
    }
    echo '</table>';

    mysqli_free_result($tPersonQuery);
?>