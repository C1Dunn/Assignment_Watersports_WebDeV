<!-- 16009608 E-Commerce Assignment Part 2 -->
<!-- This file ends the session -->
<?php 
session_unset();
session_destroy();
echo "logging out";
header("refresh:1; url=login.php");
?>