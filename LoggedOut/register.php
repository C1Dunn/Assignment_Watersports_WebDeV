<!-- 16009608 E-Commerce Assignment Part 2 -->
<!-- This file allows the user to register a new account -->
<?php
    include('../ConnectHeadFoot/connect.php');

        $submittedMemberNumber = $_POST['MemberNumber'];
        $submittedForename = $_POST['Forename'];
        $submittedSurname = $_POST['Surname'];
        $submittedStreet = $_POST['Street'];
        $submittedTown = $_POST['Town'];
        $submittedPostcode = $_POST['Postcode'];
        $submittedEmail = $_POST['Email'];
        $submittedCategory = $_POST['Category'];
        $submittedLoginPassword = $_POST['LoginPassword'];
        $hashedPassword= password_hash ( $_POST['LoginPassword'], PASSWORD_BCRYPT);
?>
<html>
    <head>
        <div>
           <?php include('headerOut.php');?>
        </div>
    </head>
    <body>
        <div class="Login">
            <button type="button"> 
                <h3>Please register account information.</h3>   
                <form action="register.php" method="post">
                    Forename: <br><input type="test" name="Forename"><br><br>
                    Surname: <br><input type="text" name ="Surname"><br><br>
                    Street: <br><input type="text" name="Street"><br><br>
                    Town: <br><input type="text" name="Town"><br><br>
                    Postcode: <br><input type="text" name="Postcode"><br><br>
                    Email: <br><input type="email" name="Email"><br><br>
                    Category: 
                        <select id="Category" name="Category">
                            <option value="bronze">Bronze</option>
                            <option value="silver">Silver</option>
                            <option value="gold">Gold</option>
                        </select><br><br>
                    LoginPassword: <br><input type="password" name="LoginPassword"><br><br>
                    <br>
                    <br> 
                    <input type="submit">
                </button>       
        </div>
    </body>
</html>

<?php
    if($submittedEmail == TRUE)
    {
    //Inserts into database
    $sql = "INSERT INTO Emember (MemberNumber,Forename,Surname,Street,Town,Postcode,Email,Category,LoginPassword)
    VALUES ('$submittedMemberNumber','$submittedForename','$submittedSurname','$submittedStreet','$submittedTown','$submittedPostcode','$submittedEmail','$submittedCategory','$hashedPassword')";

        if ($conn->query($sql) === TRUE) 
        {
            echo "New record created successfully";
            header("refresh:1; url=login.php");
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
            header("refresh:2; url=register.php");
        }
    }
    $conn->close();
    include('../ConnectHeadFoot/footer.php');
?>