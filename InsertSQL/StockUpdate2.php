<!-- 16009608 E-Commerce Assignment Part 2 -->
<!-- This file updates the stock quanity  -->
<?php
session_start();
include('../ConnectHeadFoot/connect.php');
$sqlQuantityUpdate2 = "UPDATE Estock SET StockQuantity = '{$_SESSION['InitialQuantity2']}' - '{$_SESSION['quantity2']}' WHERE Description = '{$_SESSION['option2']}';";

if ($conn->query($sqlQuantityUpdate2) === TRUE) 
{
    
} 
else 
{
    echo "Error: " . $sqlQuantityUpdate2 . "<br>" . $conn->error;
}
$conn->close();
?>