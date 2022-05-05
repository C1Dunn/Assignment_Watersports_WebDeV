<!-- 16009608 E-Commerce Assignment Part 2 -->
<!-- This file shows the user information upon login -->
<?PHP 
    session_start();
?>
<html>
    <head>
        <?php include('../ConnectHeadFoot/header.php');?>
    </head>
    <body>
    <?php 
    include('../SelectSQL/SelectFromEm.php');
    include('../Images/MembershipIcon.php');
    ?>
    <br>
        <table>
            <tr>
                <th>MemberNumber</th>
                <th>Forename</th>
                <th>Surname</th>
                <th>Street</th>
                <th>Town</th>
                <th>Postcode</th>
                <th>Email</th>
                <th>Category</th>
                <th>Discount</th>
            </tr>
            <?php
                    echo '<tr>';
                        echo '<td>'.$_SESSION['MemberNumber'].'</td>';
                        echo '<td>'.$_SESSION['Forename'].'</td>';
                        echo '<td>'.$_SESSION['Surname'].'</td>';
                        echo '<td>'.$_SESSION['Street'].'</td>';
                        echo '<td>'.$_SESSION['Town'].'</td>';
                        echo '<td>'.$_SESSION['Postcode'].'</td>';
                        echo '<td>'.$_SESSION['user'].'</td>';
                        echo '<td>'.$_SESSION['account'].'</td>';
                        echo '<td>'.$_SESSION['discount'].'</td>';
                    echo '</tr>';
            ?>
        </table>
    </body>
    <footer>
        <?php include('../ConnectHeadFoot/footer.php');?>
    </footer>
</html>