<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $name='alphacrm';
    $connection=mysqli_connect($hostname,$username,$password,$name);

    echo '<h2 style="font-family: arial,helvetica,sans-serif">
                New Company Creation Form
            <h2/>';
    echo '<br/>';
    echo '<form name="postCompany" action="CompanyCreate.php" method="post">';
        echo '
        <table>
            <tr>
                <td>pre Name </td>
                <td><input type="text" name="preName"/><td/>
            <tr/>
            <tr>
                <td>Company Name</td>
                <td><input type="text" name="companyName"/></td>
                </tr>
            <tr>
                <td>Reg Type </td>
                <td><input type="text" name="RegType"/><td/>
            <tr/>
            <tr>
                <td>Address </td>
                <td><input type="text" name="StreetA"/><td/>
            <tr/>
            <tr>
                <td></td>
                <td><input type="text" name="StreetB"/><td/>
            <tr/>
            <tr>
                <td></td>
                <td><input type="text" name="StreetC"/><td/>
            <tr/>
            <tr>
                <td>Town</td>
                <td><input type="text" name="Town"/><td/>
            <tr/>
            <tr>
                <td>County</td>
                <td><input type="text" name="County"/><td/>
            <tr/>
            <tr>
                <td>Postcode</td>
                <td><input type="text" name="Postcode"/><td/>
            <tr/>
            <tr>
                <td>COUNTRY</td>
                <td><input type="text" name="COUNTRY"/><td/>
            <tr/>
            <tr>
                <td></td>
                <td align="right"><input type="submit" value="Save"/><td/>
            <tr/>
        </table>';
        echo '</form>';
?>