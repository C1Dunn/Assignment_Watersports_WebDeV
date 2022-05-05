<!-- 16009608 E-Commerce Assignment Part 2 -->
<!-- This file inserts information for the order of the third item  -->
<?php
session_start();
include('../ConnectHeadFoot/connect.php');
$sqlStock2 = "INSERT INTO Eorderline (OrderNumber,StockNumber,Quanity)
VALUES ('{$_SESSION['OrderNumber']}','{$_SESSION['StockNumber2']}','{$_SESSION['quantity2']}')";

if ($conn->query($sqlStock2) === TRUE) 
{
    
} 
else 
{
    echo "Error: " . $sqlStock2 . "<br>" . $conn->error;
}
$conn->close();
?>