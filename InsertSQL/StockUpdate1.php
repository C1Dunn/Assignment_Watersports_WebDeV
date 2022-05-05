<!-- 16009608 E-Commerce Assignment Part 2 -->
<!-- This file updates the stock quanity  -->
<?php
session_start();
include('../ConnectHeadFoot/connect.php');
$sqlQuantityUpdate = "UPDATE Estock SET StockQuantity = '{$_SESSION['InitialQuantity1']}' - '{$_SESSION['quantity1']}' WHERE Description = '{$_SESSION['option1']}';";

if ($conn->query($sqlQuantityUpdate) === TRUE) 
{
    
} 
else 
{
    echo "Error: " . $sqlQuantityUpdate . "<br>" . $conn->error;
}
$conn->close();
?>