<!-- 16009608 E-Commerce Assignment Part 2 -->
<!-- This file inserts information for the order of the third item  -->
<?php
session_start();
include('../ConnectHeadFoot/connect.php');
$sqlStock1 = "INSERT INTO Eorderline (OrderNumber,StockNumber,Quanity)
VALUES ('{$_SESSION['OrderNumber']}','{$_SESSION['StockNumber1']}','{$_SESSION['quantity1']}')";

if ($conn->query($sqlStock1) === TRUE) 
{
    
} 
else 
{
    echo "Error: " . $sqlStock1 . "<br>" . $conn->error;
}
$conn->close();
?>