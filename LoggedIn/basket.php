<!-- 16009608 E-Commerce Assignment Part 2 -->
<!-- This file allows the user to register a new account -->
<?php
    session_start();

        $submittedOption1 = $_POST['option1'];
        $submittedOption2 = $_POST['option2'];
        $submittedOption3 = $_POST['option3'];
        $submittedQuantity1 = $_POST['quantity1'];
        $submittedQuantity2 = $_POST['quantity2'];
        $submittedQuantity3 = $_POST['quantity3'];
        $description = $_POST['description']; 

    include('../SelectSQL/SelectStockOptions.php');
        $price1 = $_SESSION['Price1'];
        $price2 = $_SESSION['Price2'];
        $price3 = $_SESSION['Price3'];

        $_SESSION['option1'] = $submittedOption1;
        $_SESSION['option2'] = $submittedOption2;
        $_SESSION['option3'] = $submittedOption3;
        $_SESSION['quantity1'] = $submittedQuantity1;
        $_SESSION['quantity2'] = $submittedQuantity2;
        $_SESSION['quantity3'] = $submittedQuantity3;
?>
<html>
<head><?php include('../ConnectHeadFoot/header.php');?></head>
<?php include('../Images/MembershipIcon.php');?>
<br>
    <body>
        <h3 class="smallTitle">You have selected:</h3>
        <table>
            <tr>
                <th>Item Selected</th>
                <th>Quantity Selected</th>
                <th>Price</th>
            </tr>
            <tr>
                <td><?php echo $submittedOption1?></td>
                <td><?php echo $submittedQuantity1?></td>
                <td><?php switch($_SESSION)
                {
                    case($_SESSION['option1'] != "None"):
                        echo $price1;
                    break;
                    default:
                    echo " ";

                }?></td>
            </tr>
            <tr>
                <td><?php echo $submittedOption2?></td>
                <td><?php echo $submittedQuantity2?></td>
                <td><?php switch($_SESSION)
                {
                    case($_SESSION['option2'] != "None"):
                        echo $price2;
                    break;
                    default:
                    echo " ";

                }?></td>
            </tr>
            <tr>
                <td><?php echo $submittedOption3?></td>
                <td><?php echo $submittedQuantity3?></td>
                <td><?php switch($_SESSION)
                {
                    case($_SESSION['option3'] != "None"):
                        echo $price3;
                    break;
                    default:
                    echo " ";

                }?></td>
            </tr>
        </table>
        <div>
            <h2 class="smallTitle">Do you wish to order?</h2>
            <button>
                <a href="../LoggedIn/items.php">Back</a>
            </button>
            <button>
                <a href="../InsertSQL/InsertMember.php">Confirm</a>
            </button>
        </div>
    </body>
</html>
<?php
    $conn->close();
    include('../ConnectHeadFoot/footer.php');
?>