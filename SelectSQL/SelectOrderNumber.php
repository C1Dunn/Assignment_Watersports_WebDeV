<!-- 16009608 E-Commerce Assignment Part 2 -->
<!-- This file pulls the order number for the transaction -->
<?php
session_start();
include('../ConnectHeadFoot/connect.php');
$sqlOrder = "SELECT OrderNumber FROM Eorder WHERE MemberNumber = '{$_SESSION['MemberNumber']}' ORDER BY OrderNumber DESC LIMIT 1";
$resultOrder = $conn->query($sqlOrder);
if ($resultOrder = $conn->query($sqlOrder)) 
    {
        // output data of each row
        //echo "test3";
        while($RowOrder = $resultOrder->fetch_assoc())
        {
            $OrderNumber = $RowOrder['OrderNumber'];
            $_SESSION['OrderNumber'] = $OrderNumber;
        }
    }
?>