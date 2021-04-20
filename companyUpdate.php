<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $name='alphacrm';
    $connection=mysqli_connect($hostname,$username,$password,$name);

    $select="SELECT ID, preName, Name FROM tCompany Order By Name ";
    $selectquery=mysqli_query($connection,$select);

    echo "<form action='companyEditForm.php' method='post'>";
    echo "<select name='companyID'>";
        echo "<option value='0' label='coyvalue' selected='selected'>..select company..</option>";
            while($row = mysqli_fetch_array($selectquery,MYSQLI_ASSOC)){
                $ID=$row['ID'];
                $preName=$row['preName'];
                $companyName=$row['Name'];
                $fullCoyName=trim($preName." ".$companyName);
                echo '<option value=".$ID">'.$fullCoyName.'</option>';
            }
            mysqli_free_result($selectquery);
            echo '</select>';
            echo '<input type="submit">';
            echo '</form>';
?>