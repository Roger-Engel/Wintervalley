<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>WinterValley</title>
  <link rel="icon" href="../img/logo.png" type="image/x-icon" />

  <style>
    <?php include '../style.css'; ?>
  </style>
</head>
<div id="overlay"></div>

<body>
  <!-- logo -->
  <div class="logo">
    <a href="index.php"> <img src="../img/logo.png" alt="logo" /></a>
    <h1>WinterValley</h1>
    <div class="empty"></div>
    <!--login/register -->
    <?php

    if (isset($_SESSION["useruid"])) {
      echo '<a class="log-out-button" href="../include/logout.inc.php">Log out</a>';
    } else {
      include "../include/login.php";
    ?> <div class="empty2"></div> <?php
                                  include "../include/register.php";
                                }
                                  ?>
    <div class="empty3"></div>
  </div>
  <!-- navbar -->
  <?php include "../include/navbar.php" ?>
  <!-- merch store container  -->
  <h1 class="merch"> Merchandise Store</h1>
  <div class="merch-flex-container">

    <!-- Wintervalley t-Shirt -->
    <div class="merch-flex-item">
      <div class="merch_featuring">
        <p>WinterValley T-shirt</p>
        <img class="img-shirt" src="../img/Merchandise/wintervalley-shirt.png">
        <p>€29.99</p>
        <form action="" method="post">
          <select required id="merch-select">
            <option value="">Select your size</option>
            <option value="XS">XS</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
          </select>
          <br>
          <label for="merch_winter">Amount:</label>
          <input class="merch_input" type="number" name="merch_winter" id="merch_winter" required value="1" min="1" max="8">
          <?php include "../include/merchwinter.php" ?>
          <div class="merchPopupBox">
            <div class="merchPopup" id="merch_pop-up_Wintervalley">
            </div>
            <input type="submit" value="Buy Now" action="merchandise.php" id="btnMerch"></input>
          </div>
        </form>

      </div>
    </div>

    <!-- finland t-Shirt -->
    <div class="merch-flex-item">
      <div>
        <p>Finland T-shirt</p>
        <img class="img-shirt" src="../img/Merchandise/finland-shirt.png">
        <p>€29.99</p>
        <form action="" method="post">
          <select required id="merch-select">
            <option value="">Select your size</option>
            <option value="XS">XS</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
          </select>
          <br>
          <label for="merch_fin">Amount:</label>
          <input class="merch_input" type="number" name="merch_fin" id="merch_fin" required value="1" min="1" max="8">
          <?php include "../include/merchfin.php" ?>
          <div class="merchPopupBox">
            <div class="merchPopup" id="merch_pop-up_Wintervalley">
            </div>
            <input type="submit" value="Buy Now" action="merchandise.php" id="btnMerch"></input>
          </div>
        </form>
      </div>
    </div>

    <!-- netherlands t-Shirt -->
    <div class="merch-flex-item">
      <div class="merch_featuring">
        <p>Netherlands T-shirt</p>
        <img class="img-shirt" src="../img/Merchandise/netherlands-shirt.png">
        <p>€29.99</p>
        <form action="" method="post">
          <select required id="merch-select">
            <option value="">Select your size</option>
            <option value="XS">XS</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
          </select>
          <br>
          <label for="merch_net">Amount:</label>
          <input class="merch_input" type="number" name="merch_net" id="merch_net" required value="1" min="1" max="8">
          <?php include "../include/merchnet.php" ?>
          <div class="merchPopupBox">
            <div class="merchPopup" id="merch_pop-up_Wintervalley">
            </div>
            <input type="submit" value="Buy Now" action="merchandise.php" id="btnMerch"></input>
          </div>
        </form>
      </div>
    </div>

    <!-- norway t-Shirt -->
    <div class="merch-flex-item">
      <div class="merch_featuring">
        <p>Norway T-shirt</p>
        <img class="img-shirt" src="../img/Merchandise/norway-shirt.png">
        <p>€29.99</p>
        <form action="" method="post">
          <select required id="merch-select">
            <option value="">Select your size</option>
            <option value="XS">XS</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
          </select>
          <br>
          <label for="merch_nor">Amount:</label>
          <input class="merch_input" type="number" name="merch_nor" id="merch_nor" required value="1" min="1" max="8">
          <?php include "../include/merchnor.php" ?>
          <div class="merchPopupBox">
            <div class="merchPopup" id="merch_pop-up_Wintervalley">
            </div>
            <input type="submit" value="Buy Now" action="merchandise.php" id="btnMerch"></input>
          </div>
        </form>
      </div>
      </div>
    </div>                      
  </div>
</body>
<?php include "../include/footer.php" ?>
</html>