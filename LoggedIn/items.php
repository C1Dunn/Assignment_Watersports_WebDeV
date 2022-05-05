<!-- 16009608 E-Commerce Assignment Part 2 -->
<!-- This file holds the form that allows users to select the items they want to buy -->
<?PHP 
      session_start();
?>
<html>
  <head>
      <?php 
            include('../ConnectHeadFoot/header.php');
      ?>
  </head>
      <body>
      <?php include('../Images/MembershipIcon.php');?>
            <div>
                  <br>
                  <?php 
                        include('../SelectSQL/SelectWholeEs.php');
                  ?>
            </div>
            <div class="choice">
                  <form method="POST" action="basket.php">
                        <select type="text" name="option1">
                              <option value="None">None</option>
                              <option value="Firefox Twin Turbo">Firefox Twin Turbo</option>
                              <option value="Ladies MonoSki">Ladies MonoSki</option>
                              <option value="Ladies MonoSki II">Ladies MonoSki II</option>
                              <option value="Life Jackets Mk4">Life Jackets Mk4</option>
                              <option value="Waterproof Shoes">Waterproof Shoes</option>
                              <option value="Galaxy Open Topped">Galaxy Open Topped</option>
                              <option value="5mm Long Sleeved Nordic">5mm Long Sleeved Nordic</option>
                        </select>
                              <input type="number" name="quantity1" min="1">
                              <br>
                              <br>
                        <select type="text" name="option2">
                              <option value="None">None</option>
                              <option value="Firefox Twin Turbo">Firefox Twin Turbo</option>
                              <option value="Ladies MonoSki">Ladies MonoSki</option>
                              <option value="Ladies MonoSki II">Ladies MonoSki II</option>
                              <option value="Life Jackets Mk4">Life Jackets Mk4</option>
                              <option value="Waterproof Shoes">Waterproof Shoes</option>
                              <option value="Galaxy Open Topped">Galaxy Open Topped</option>
                              <option value="5mm Long Sleeved Nordic">5mm Long Sleeved Nordic</option>
                        </select>
                              <input type="number" name="quantity2" min="1">
                              <br>
                              <br>
                        <select type="text" name="option3">
                              <option value="None">None</option>
                              <option value="Firefox Twin Turbo">Firefox Twin Turbo</option>
                              <option value="Ladies MonoSki">Ladies MonoSki</option>
                              <option value="Ladies MonoSki II">Ladies MonoSki II</option>
                              <option value="Life Jackets Mk4">Life Jackets Mk4</option>
                              <option value="Waterproof Shoes">Waterproof Shoes</option>
                              <option value="Galaxy Open Topped">Galaxy Open Topped</option>
                              <option value="5mm Long Sleeved Nordic">5mm Long Sleeved Nordic</option>
                        </select>
                              <input type="number" name="quantity3" min="1">
                              <br>
                              <br>
                              <input type="hidden" value="Description" name="description">
                        <input type="submit">
                  </form>
            </div>
      </body>
</html>
<?php 
      include('../ConnectHeadFoot/footer.php');
?>