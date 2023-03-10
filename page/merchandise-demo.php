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

   <!-- finland t-Shirt -->
   <div class="merch-flex-item">
      <p>WinterValley T-shirt</p>
      <img class="img-shirt" src="../img/Merchandise/wintervalley-shirt.png">

      <div class="merchPopupBox">
        <div class="merchPopup" id="merch_pop-up_Wintervalley">
          <form class="merchContainer">
            <label for="merchCheckbox">
              <h2 class="popup_merch_title">
                <!-- name -->
            </label>
            <div class="merch_featuring">
              <h2> Wintervalley<br>T-shirt</h2>
              <img class="img-shirt-popup" src="../img/Merchandise/wintervalley-shirt.png">
              <p>€29.99</p>
              <label for="merch-select">Choose your size</label><br>

<select required id="merch-select">
    <option value="">Select your size</option>
    <option value="XS">XS</option>
    <option value="S">S</option>
    <option value="M">M</option>
    <option value="L">L</option>
    <option value="XL">XL</option>
    <option value="XXL">XXL</option>
</select>
            </div>
            <button type="submit" class="btnMerch">Confirm</button>
            <button type="button" class="btn_cancelMerch" onclick="shirt_closePopupWintervalley()">Close</button>
          </form>
        </div>
        <div><button onclick="shirt_openPopupWintervalley()" class="merch_button">Buy now</button></div>
      </div>
    </div>

    <!-- finland t-Shirt -->
    <div class="merch-flex-item">
      <p>Finland T-shirt</p>
      <img class="img-shirt" src="../img/Merchandise/finland-shirt.png">

      <div class="merchPopupBox">
        <div class="merchPopup" id="merch_pop-up_Finland">
          <form class="merchContainer">
            <label for="merchCheckbox">
              <h2 class="popup_merch_title">
                <!-- name -->
            </label>
            <div class="merch_featuring">
              <h2> Finland<br>T-shirt</h2>
              <img class="img-shirt-popup" src="../img/Merchandise/finland-shirt.png">
              <p>€29.99</p>
              <label for="merch-select">Choose your size</label><br>

<select required id="merch-select">
    <option value="">Select your size</option>
    <option value="XS">XS</option>
    <option value="S">S</option>
    <option value="M">M</option>
    <option value="L">L</option>
    <option value="XL">XL</option>
    <option value="XXL">XXL</option>
</select>
            </div>
            <button type="submit" class="btnMerch">Confirm</button>
            <button type="button" class="btn_cancelMerch" onclick="shirt_closePopupFinland()">Close</button>
          </form>
        </div>
        <div><button onclick="shirt_openPopupFinland()" class="merch_button">Buy now</button></div>
      </div>
    </div>

      <!-- netherlands t-Shirt -->
      <div class="merch-flex-item">
        <img>
        <p>Netherlands T-shirt</p>
        <img class="img-shirt" src="../img/Merchandise/netherlands-shirt.png">
        <div class="merchPopupBox">
        <div class="merchPopup" id="merch_pop-up_Netherland">
          <form class="merchContainer">
            <label for="merchCheckbox">
              <h2 class="popup_merch_title">
                <!-- name -->
            </label>
            <div class="merch_featuring">
              <h2> Netherlands<br>T-shirt</h2>
              <img class="img-shirt-popup" src="../img/Merchandise/netherlands-shirt.png">
              <p>€29.99</p>
              <label for="merch-select">Choose your size</label><br>

<select required id="merch-select">
    <option value="">Select your size</option>
    <option value="XS">XS</option>
    <option value="S">S</option>
    <option value="M">M</option>
    <option value="L">L</option>
    <option value="XL">XL</option>
    <option value="XXL">XXL</option>
</select>
            </div>
            <button type="submit" class="btnMerch">Confirm</button>
            <button type="button" class="btn_cancelMerch" onclick="shirt_closePopupNetherlands()">Close</button>
          </form>
        </div>
        <div><button onclick="shirt_openPopupNetherlands()" class="merch_button">Buy now</button></div>
      </div>
    </div>

      <!-- norway t-Shirt -->
      <div class="merch-flex-item">
        <img>
        <p>Norway T-shirt</p>
        <img class="img-shirt" src="../img/Merchandise/norway-shirt.png">
        <div class="merchPopupBox">
          <div id="overlay"></div>
        <div class="merchPopup" id="merch_pop-up_Norway">
          <form class="merchContainer">
            <label for="merchCheckbox">
              <h2 class="popup_merch_title">
                <!-- name -->
            </label>

            <div class="merch_featuring">
              <h2> Norway<br>T-shirt</h2>
              <img class="img-shirt-popup" src="../img/Merchandise/norway-shirt.png">
              <p>€29.99</p>
              <label for="merch-select">Choose your size</label><br>

<select required id="merch-select">
    <option value="">Select your size</option>
    <option value="XS">XS</option>
    <option value="S">S</option>
    <option value="M">M</option>
    <option value="L">L</option>
    <option value="XL">XL</option>
    <option value="XXL">XXL</option>
</select>
            </div>
            <button type="submit" class="btnMerch">Confirm</button>
            <button type="button" class="btn_cancelMerch" onclick="shirt_closePopupNorway()">Close</button>
          </form></div>
        </div>
        <div><button onclick="shirt_openPopupNorway()" class="merch_button">Buy now</button></div>
      </div>
    </div>
      </div>
    </div>
    <div>ㅤ</div>
    <div>ㅤ</div>

</body>
<?php include "../include/footer.php" ?>
<script>
    // T-shirt Wintervalley
    function shirt_openPopupWintervalley() {
        document.getElementById("merch_pop-up_Wintervalley").style.display = "block";
        disableButtons();
    }

    function shirt_closePopupWintervalley() {
        document.getElementById("merch_pop-up_Wintervalley").style.display = "none";
        enableButtons();
    }

    // T-shirt Finland
    function shirt_openPopupFinland() {
        document.getElementById("merch_pop-up_Finland").style.display = "block";
        disableButtons();
    }

    function shirt_closePopupFinland() {
        document.getElementById("merch_pop-up_Finland").style.display = "none";
        enableButtons();
    }
    // T-shirt Netherlands
    function shirt_openPopupNetherlands() {
        document.getElementById("merch_pop-up_Netherland").style.display = "block";
        disableButtons();
    }

    function shirt_closePopupNetherlands() {
        document.getElementById("merch_pop-up_Netherland").style.display = "none";
        enableButtons();
    }
    // T-shirt Norway
    function shirt_openPopupNorway() {
        document.getElementById("merch_pop-up_Norway").style.display = "block";
        disableButtons();
    }

    function shirt_closePopupNorway() {
        document.getElementById("merch_pop-up_Norway").style.display = "none";
        enableButtons();
    }

    function disableButtons() {
        let buttons = document.querySelectorAll("button:not(.popup-button)");
        for (let i = 0; i < buttons.length; i++) {
            buttons[i].setAttribute("disabled", true);
        }
    }

    function enableButtons() {
        let buttons = document.querySelectorAll("button:not(.popup-button, btn_cancelTicket, btn cancel, cancel-button)");
        for (let i = 0; i < buttons.length; i++) {
            buttons[i].removeAttribute("disabled");
        }
    }

        // T-shirt Wintervalley
function shirt_openPopupWintervalley() {
  document.getElementById("merch_pop-up_Wintervalley").style.display = "block";
  document.getElementById("overlay").style.display = "block";
}

function shirt_closePopupWintervalley() {
  document.getElementById("merch_pop-up_Wintervalley").style.display = "none";
  document.getElementById("overlay").style.display = "none";
}

    // T-shirt Finland
function shirt_openPopupFinland() {
  document.getElementById("merch_pop-up_Finland").style.display = "block";
  document.getElementById("overlay").style.display = "block";
}

function shirt_closePopupFinland() {
  document.getElementById("merch_pop-up_Finland").style.display = "none";
  document.getElementById("overlay").style.display = "none";
}

document.getElementById("finlandBtn").addEventListener("click", shirt_openPopupFinland);

    // T-shirt Netherlands
    function shirt_openPopupNetherlands() {
  document.getElementById("merch_pop-up_Netherland").style.display = "block";
  document.getElementById("overlay").style.display = "block";
}

function shirt_closePopupNetherlands() {
  document.getElementById("merch_pop-up_Netherland").style.display = "none";
  document.getElementById("overlay").style.display = "none";
}

document.getElementById("netherlandsBtn").addEventListener("click", shirt_openPopupNetherlands);

    // T-shirt norway
    function shirt_openPopupNorway() {
  document.getElementById("merch_pop-up_Norway").style.display = "block";
  document.getElementById("overlay").style.display = "block";
}

function shirt_closePopupNorway() {
  document.getElementById("merch_pop-up_Norway").style.display = "none";
  document.getElementById("overlay").style.display = "none";
}

document.getElementById("norwayBtn").addEventListener("click", shirt_openPopupNorway);
</script>

</html>