<!-- 16009608 E-Commerce Assignment Part 2 -->
<!-- This file updates the stock quanity  -->
<?php
session_start();
include('../ConnectHeadFoot/connect.php');
$sqlQuantityUpdate3 = "UPDATE Estock SET StockQuantity = '{$_SESSION['InitialQuantity3']}' - '{$_SESSION['quantity3']}' WHERE Description = '{$_SESSION['option3']}';";

if ($conn->query($sqlQuantityUpdate3) === TRUE) 
{
    
} 
else 
{
    echo "Error: " . $sqlQuantityUpdate3 . "<br>" . $conn->error;
}
$conn->close();
?>