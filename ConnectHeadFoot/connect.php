<!-- 16009608 E-Commerce Assignment Part 2 -->
<!-- A reusable file to connect to the database to allow for input and outputting information-->
<?php
//information to allow to connection to be created
    $servername = "comp-server.uhi.ac.uk";
    $username = "IN16009608"; 
    $password = "IN16009608";
    $dbname = "IN16009608";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }
?>