<!-- 16009608 E-Commerce Assignment Part 2 -->
<!-- This file allows users to log into the website -->
<?php
  session_start();
  include('../ConnectHeadFoot/connect.php');

  $submittedEmail = $_POST['Email'];
  $submittedPassword = $_POST['LoginPassword'];
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
      <h3>Please enter login information</h3>
        <form action="login.php" method="POST">
          Email address: 
            <br>
              <input type="email" name="Email">
            <br>
            <br>
          Password: 
            <br>
              <input type="password" name="LoginPassword">
            <br>
            <br>
          <input value="Login" type="submit">
        </form>
    </div>
  </body>
</html>
<?php
  if($submittedPassword == TRUE)
    {
      $sql = "SELECT Email, LoginPassword FROM Emember WHERE Email='$submittedEmail'";
        $result = $conn->query($sql);
          if ($result->num_rows > 0) 
          {
            while($row = $result->fetch_assoc()) 
            {
              if ($auth == $$hashedPassword) 
              {
                $_SESSION['user'] = $submittedEmail;
                echo "Password match <br>";
                header("refresh:1; url=../LoggedIn/welcome.php");
              } 
              else 
              {
                echo "Password invalid <br>";
                header("refresh:1; url=login.php");
              }
            }
          } 
          else 
          {
            echo "Account not found! <br>";
            header("refresh:1; url=login.php");
          }
    }
  $conn->close();
  include('../ConnectHeadFoot/footer.php');
?>