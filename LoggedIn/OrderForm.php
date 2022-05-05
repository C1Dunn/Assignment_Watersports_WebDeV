<!-- 16009608 E-Commerce Assignment Part 2 -->
<!-- This page shows the users order and costs -->
<?PHP 
    session_start();
    include('../ConnectHeadFoot/connect.php');
    include('../SelectSQL/SelectOrderNumber.php');
    // creation of the totals for each of the items 
    $total1 = (float)ROUND(($_SESSION['Price1']*$_SESSION['quantity1']),2);
    $total2 = (float)ROUND(($_SESSION['Price2']*$_SESSION['quantity2']),2);
    $total3 = (float)ROUND(($_SESSION['Price3']*$_SESSION['quantity3']),2);
    $itemsCost = $total1 + $total2 + $total3;
    // calculates the discount amount depending on the users status
    switch($_SESSION)
            {
                case $_SESSION['account'] == 'gold':
                    $discountAmount = (float)ROUND((($itemsCost/100)*20),2);
                break;
                case $_SESSION['account'] == 'silver':
                    $discountAmount = (float)ROUND((($itemsCost/100)*10),2);
                break;
                default:
                $discountAmount = 0;
            }
            // calculates the various costs involved in the order form 
    $discountCost = (float)ROUND(($itemsCost - $discountAmount),2);
    $VATamount = (float)ROUND((($discountCost/100)*20),2);
    $grandCost = (float)ROUND(($discountCost + $VATamount),2);
?>
<html>
<link rel="stylesheet" type="text/css" href="../Styles/design.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <button><a href="../LoggedOut/logout.php">Sign Out</a></button>
    <body>
        <br>
        <br>
        <br>
        <!-- Displays all the information to the user, including their personal, item and cost information -->
        <div class="OrderFormDetails">
            <h2>Thank You <?php echo $_SESSION['Forename'];echo' ';echo $_SESSION['Surname'];echo", ";echo$_SESSION['MemberNumber'];?></h2>
            <p>Your order will be delivered to: <?php echo '<br>'; echo $_SESSION['Street']; echo '<br>'; echo $_SESSION['Town'];echo '<br>';echo $_SESSION['Postcode'];?><br>If there are any issues with your order you will be contacted via your email address <?php echo $_SESSION['user'];?></p>
        </div>
        <br>
        <br>
        <div class="OrderFormDetails">
            <h2>Order Details</h2>
            <p>
                Order Number: <?php echo $_SESSION['OrderNumber'];?> 
                <br>
                <?php
                    switch($_SESSION)
                                {
                                    case $_SESSION['option1'] != 'None':
                                        include('../InsertSQL/StockUpdate1.php');
                                        include('../InsertSQL/InsertStock1.php');
                                        echo $_SESSION['StockNumber1']; ?> : <?php echo $_SESSION['option1'];?>: £<?php echo $_SESSION['Price1'];?>*<?php echo $_SESSION['quantity1'];?> = £<?php echo $total1;?><?php
                                    break;
                                    default:
                                        echo ' ';
                                }
                                    echo '<br>';
                                switch($_SESSION)
                                {
                                    case $_SESSION['option2'] != 'None':
                                        include('../InsertSQL/StockUpdate2.php');
                                        include('../InsertSQL/InsertStock2.php');
                                        echo $_SESSION['StockNumber2']; ?> : <?php echo $_SESSION['option2'];?>: £<?php echo $_SESSION['Price2'];?>*<?php echo $_SESSION['quantity2'];?> = £<?php echo $total2;?><?php
                                    break;
                                    default:
                                        echo ' ';
                                }
                                    echo '<br>';
                                switch($_SESSION)
                                {
                                    case $_SESSION['option3'] != 'None':
                                        include('../InsertSQL/StockUpdate3.php');
                                        include('../InsertSQL/InsertStock3.php');
                                        echo $_SESSION['StockNumber3']; ?> : <?php echo $_SESSION['option3'];?>: £<?php echo $_SESSION['Price3'];?>*<?php echo $_SESSION['quantity3'];?> = £<?php echo $total3;?><?php
                                    break;
                                    default:
                                        echo ' ';
                                }
                ?>
                <br>
                Total cost of items = £<?php echo $itemsCost;?>
                <br>
                VAT: 20% - £<?php echo $VATamount;?>
                <br>
                <?php echo $_SESSION['account'];?> discount: <?php echo $_SESSION['discount'];?> - £<?php echo $discountAmount;?>
                <br>
                Grand Total Cost: £<?php echo $grandCost;?>
                <br>
                <!-- Found with help from w3schools.com at: https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_print -->
                <button onclick="window.print()">Print Invoice</button>
            </p>
        </div>
        <br>
        <br>
    </body>
</html>
<?php
    include('../ConnectHeadFoot/footer.php');
?>