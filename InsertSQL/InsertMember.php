<!-- 16009608 E-Commerce Assignment Part 2 -->
<!-- https://www.w3schools.com/php/php_mysql_insert_lastid.asp for help with gaining the order number as a variable -->
<?php
session_start();
include('../ConnectHeadFoot/connect.php');
$sql = "INSERT INTO Eorder (MemberNumber)
VALUES ('{$_SESSION['MemberNumber']}')";
// if statement to check if the sql statement is correct and forward the user as necessary.
if ($conn->query($sql) === TRUE) 
{
    echo "Member Number inserted correctly";
    header("refresh:1; url=../LoggedIn/OrderForm.php");
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
    header("refresh:1; url=../LoggedIn/basket.php");
}
$conn->close();
?>