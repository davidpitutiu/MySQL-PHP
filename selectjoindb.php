<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $name='alphacrm';
    $connection=mysqli_connect($hostname,$username,$password,$name);
    $selectjoi="SELECT tPerson.ID,tPerson.Salutation, tPerson.FirstName,tPerson.LastName, tCompany.preName,tCompany.Name FROM tPerson LEFT OUTER JOIN tCompany ON tPerson.CompanyID=tCompany.ID";
    $selectjoin=mysqli_query($connection,$selectjoi);
    echo $select;
     echo "<table border='1'>";
    echo "<tr>";
        echo "<td>#</td>";
        echo "<td>Salut</td>";
        echo "<td>FirstName</td>";
        echo "<td>LastName</td>";
        echo "<td>Company</td>";
    echo "</tr>";
    $index=1;
    while($row=mysqli_fetch_array($selectjoi,MYSQLI_ASSOC)){
        $Salutation=$row['Salutation'];
        $FirstName=$row['FirstName'];
        $LastName=$row['LastName'];
        $CompanypreName=$row['preName'];
        $CompanyName=$row['Name'];
        $CompanyFullName=trim($CompanypreName." ".$CompanyName);
         echo "<tr>";
        echo "<td>$index</td>";
        echo "<td>$Salutation</td>";
        echo "<td>$FirstName</td>";
        echo "<td>$LastName</td>";
        echo "<td>$CompanyFullName</td>";
        echo "</tr>";
        $index++;    
    }
    echo'</table>';

    mysqli_free_result($tPersonQuery);
?>