<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $name='alphacrm';
    $connection=mysqli_connect($hostname,$username,$password,$name);
    $companyID =$_POST['companyID'];
    $sqlselect = "SELECT FROM tCompany WHERE ID = "$companyID"";
    $sqlselectquery =mysqli_query($connection,$sqlselect);
   while($row = mysqli_fetch_array($sqlselectquery,MYSQLI_ASSOC)){
        $current_preName=$row['preName'];
        $current_Name=$row['Name'];
        $current_RegType=$row['RegType'];
        $current_StreetA=$row['StreetA'];
        $current_StreetB=$row['StreetB'];
        $current_StreetC=$row['StreetC'];
        $current_Town=$row['Town'];
        $current_County=$row['County'];
        $current_Postcode=$row['Postcode'];
        $current_COUNTRY=$row['COUNTRY'];
    }
        echo "<h2 style='font-family: arial,helvetica,sans-serif;'>
                Company Edit Form </h2>";
        echo '<form name="postCompany" action="companyUpdate.php" method="post">';
        echo "<input type='hidden' name='companyID' value='.$companyID'";
        echo "
        <table>
            <tr>
                <td>pre Name </td>
                <td><input type='text' name='preName' value='.$current_preName.'/><td/>
            <tr/>
            <tr>
                <td>Company Name </td>
                <td><input type='text' name='companyName' value='.$current_Name.'/><td/>
            <tr/>
            <tr>
                <td>Reg Type </td>
                <td><input type='text' name='RegType' value='.$current_RegType.'/><td/>
            <tr/>
            <tr>
                <td>Address </td>
                <td><input type='text' name='StreetA' value='.$current_StreetA.'/><td/>
            <tr/>
            <tr>
                <td></td>
                <td><input type='text' name='StreetB' value='.$current_StreetB.'/><td/>
            <tr/>
            <tr>
                <td></td>
                <td><input type='text' name='StreetC' value='.$current_StreetC.'/><td/>
            <tr/>
            <tr>
                <td>Town</td>
                <td><input type='text' name='Town' value='.$current_Town.'/><td/>
            <tr/>
            <tr>
                <td>County</td>
                <td><input type='text' name='County' value='.$current_County.'/><td/>
            <tr/>
            <tr>
                <td>Postcode</td>
                <td><input type='text' name='Postcode' value='.$current_Postcode.'/><td/>
            <tr/>
            <tr>
                <td>COUNTRY</td>
                <td><input type='text' name='COUNTRY' value='.$current_COUNTRY.'/><td/>
            <tr/>
            
        </table>";
?>