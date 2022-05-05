<!-- 16009608 E-Commerce Assignment Part 2 -->
<!-- This file pulls the information from the stock table in rows -->
<?PHP session_start();?>
<html>
<body>
  <table>
    <tr>
      <th>Stock ID</th>
      <th>Description</th>
      <th>Price</th>
      <th>Quantity</th>
    </tr>
<?php
  include('../ConnectHeadFoot/connect.php');
//echo "test1";
	$sql = "SELECT * FROM Estock";
    $result = $conn->query($sql);
    //echo "test2";
    if ($result->num_rows > 0) 
    {
        // output data of each row
        //echo "test3";
        while($Row = $result->fetch_assoc()) 
        {
            echo '<tr>';
 echo '<td>'.$Row['StockNumber'].'</td>';
 echo '<td>'.$Row['Description'].'</td>';
 echo '<td>'.$Row['Price'].'</td>';
 echo '<td>'.$Row['StockQuantity'].'</td>';
 echo '</tr>';
        }
    } 
    else 
    {
        echo "0 results";
    }
    ?>
</table>
</div>
<div>
</div>
</body>
</html>