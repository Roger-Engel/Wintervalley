<!DOCTYPE html>
<html lang="en">

<head>
</head>


<body>
  <!-- login -->
  <?php

  if (isset($_GET["error"])) {
    if ($_GET["error"] == "wronglogin") {
      echo "<p class='error-text-login'>Incorrect login information!</p>";
    }
  }
  ?>

  <button class="open-button" onclick="openPopupLogin()">Login</button>
  <div class="overlay"></div>
  <!-- The form login popup -->
  <div class="form-popup" id="myForm">

    <form action="../include/login.inc.php" class="register-form-container" method="post">
    <img src="../img/logo.png" alt="logo-popup" class="logo-popup">
      <h1>Login</h1>

      <div class="login-data">
        <label class="register-popup_color" for="username"><b>Username</b></label>
        <input type="text" required name="uid" id="register_name" placeholder="Username">

        <label class="register-popup_color" for="psw"><b>Password</b></label>
        <input type="password" required name="pwd" id="register_password" placeholder="Password">
      </div>

      <button type="submit" name="submit" class="btn popup-button">Log in</button>
      <button type="button" class="btn cancel popup-button" onclick="closePopupLogin()">Close</button>

    </form>
  </div>

</body>

<script>
  function openPopupLogin() {
    document.getElementById("myForm").style.display = "block";
    document.getElementById("overlay").style.display = "block";
    disableButtons();
  }

  function closePopupLogin() {
    document.getElementById("myForm").style.display = "none";
    document.getElementById("overlay").style.display = "none";
    enableButtons();
  }

  function disableButtons() {
    let buttons = document.querySelectorAll("button:not(.popup-button)");
    for (let i = 0; i < buttons.length; i++) {
      buttons[i].setAttribute("disabled", true);
    }
  }

  function enableButtons() {
    let buttons = document.querySelectorAll("button:not(.popup-button)");
    for (let i = 0; i < buttons.length; i++) {
      buttons[i].removeAttribute("disabled");
    }
  }

  document.getElementById("open-button").addEventListener("click", openPopupLogin);
  document.querySelector(".cancel").addEventListener("click", closePopupLogin);

</script>

</html>