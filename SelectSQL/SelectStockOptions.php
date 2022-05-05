<!-- 16009608 E-Commerce Assignment Part 2 -->
<!-- This file selects the information from the stock table depending on the chosen items the customer wants to buy -->
<?php
include('../ConnectHeadFoot/connect.php');
$sqlES1 = "SELECT StockNumber,Price,StockQuantity FROM Estock WHERE $description = '$submittedOption1'";
    $resultES1 = $conn->query($sqlES1);
    
    if ($resultES1->num_rows > 0) 
    {
        // output data of each row
        //echo "test3";
        while($RowES1 = $resultES1->fetch_assoc()) 
        {
           
 $_SESSION['StockNumber1'] = $RowES1['StockNumber'];
 $_SESSION['Price1'] = $RowES1['Price'];
 $_SESSION['InitialQuantity1'] = $RowES1['StockQuantity'];
        }
    }
    $sqlES2 = "SELECT StockNumber,Price,StockQuantity FROM Estock WHERE $description = '$submittedOption2'";
    $resultES2 = $conn->query($sqlES2);
    
    if ($resultES2->num_rows > 0) 
    {
        // output data of each row
        //echo "test3";
        while($RowES2 = $resultES2->fetch_assoc()) 
        {
           
 $_SESSION['StockNumber2'] = $RowES2['StockNumber'];
 $_SESSION['Price2'] = $RowES2['Price'];
 $_SESSION['InitialQuantity2'] = $RowES2['StockQuantity'];
        }
    }
    $sqlES3 = "SELECT StockNumber,Price,StockQuantity FROM Estock WHERE $description = '$submittedOption3'";
    $resultES3 = $conn->query($sqlES3);
    
    if ($resultES3->num_rows > 0) 
    {
        // output data of each row
        //echo "test3";
        while($RowES3 = $resultES3->fetch_assoc()) 
        {
           
 $_SESSION['StockNumber3'] = $RowES3['StockNumber'];
 $_SESSION['Price3'] = $RowES3['Price'];
 $_SESSION['InitialQuantity3'] = $RowES3['StockQuantity'];
        }
    }
        ?>