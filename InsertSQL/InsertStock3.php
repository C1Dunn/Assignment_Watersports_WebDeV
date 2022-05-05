<!-- 16009608 E-Commerce Assignment Part 2 -->
<!-- This file inserts information for the order of the third item  -->
<?php
session_start();
include('../ConnectHeadFoot/connect.php');
$sqlStock3 = "INSERT INTO Eorderline (OrderNumber,StockNumber,Quanity)
VALUES ('{$_SESSION['OrderNumber']}','{$_SESSION['StockNumber3']}','{$_SESSION['quantity3']}')";

if ($conn->query($sqlStock3) === TRUE) 
{
    
} 
else 
{
    echo "Error: " . $sqlStock3 . "<br>" . $conn->error;
}
$conn->close();
?>