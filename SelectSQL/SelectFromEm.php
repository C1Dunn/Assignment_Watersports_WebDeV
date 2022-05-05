<!-- 16009608 E-Commerce Assignment Part 2 -->
<!-- This file selects everything from the member table relating to the logged in user and puts everything into sessions -->
<?php
  include('../ConnectHeadFoot/connect.php');
//echo "test1";
    $sql = "SELECT MemberNumber,Forename,Surname,Street,Town,Postcode,Email,Category FROM Emember WHERE Email ='{$_SESSION['user']}'";
    //echo $_SESSION['user'];
    $result = $conn->query($sql);
    //echo "test2";
    if ($result->num_rows > 0) 
    {
        // output data of each row
        //echo "test3";
        while($Row = $result->fetch_assoc()) 
        {
            $_SESSION['account'] = $Row['Category'];
            $_SESSION['MemberNumber'] = $Row['MemberNumber'];
            $_SESSION['Forename'] = $Row['Forename'];
            $_SESSION['Surname'] = $Row['Surname'];
            $_SESSION['Street'] = $Row['Street'];
            $_SESSION['Town'] = $Row['Town'];
            $_SESSION['Postcode'] = $Row['Postcode'];
            //echo $_SESSION['account'];
            switch($_SESSION)
            {
                case $_SESSION['account'] == 'gold':
                    $_SESSION['discount'] = '20%';
                break;
                case $_SESSION['account'] == 'silver':
                    $_SESSION['discount'] = '10%';
                break;
                default:
                $_SESSION['discount'] = 'None';
            }
        }
    } 
    else 
    {
        echo "0 results";
    }
    ?>