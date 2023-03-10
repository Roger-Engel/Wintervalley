<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
  <!--register -->
  <?php

  if (isset($_GET["error"])) {
    if ($_GET["error"] == "voornaam") {
      echo "<p class='error-text-register'>Choose a proper username!</p>";
    } else if ($_GET["error"] == "achternaam") {
      echo "<p class='error-text-register'>Choose a proper username!</p>";
    } else if ($_GET["error"] == "invalidemail") {
      echo "<p class='error-text-register'>Choose a proper email!</p>";
    } else if ($_GET["error"] == "passwordsdontmatch") {
      echo "<p class='error-text-register'>Passwords doesn't match!</p>";
    } else if ($_GET["error"] == "stmtfailed") {
      echo "<p class='error-text-register'>Something went wrong, try again!</p>";
    } else if ($_GET["error"] == "usernametaken") {
      echo "<p class='error-text-register'>Username already taken!</p>";
    } else if ($_GET["error"] == "none") {
      echo "<p class='error-text-register'>You have registered!</p>";
    }
  }


  ?>

  <button class="register-open-button" onclick="openPopupRegister()">Register</button>
  <div class="overlay"></div>
  <!-- The form register popup -->
  <div class="register-form-popup" id="register_myForm">

    <form action="../include/signup.inc.php" class="register-form-container" method="post">
    <img src="../img/logo.png" alt="logo-popup" class="logo-popup">
      <h1>Register</h1>

      <div class="login-data">
        <label class="register-popup_color" for="name"><b>First Name</b></label>
        <input type="text" required name="voornaam" id="register_name" placeholder="Name">

        <label class="register-popup_color" for="name"><b>Last Name</b></label>
        <input type="text" required name="achternaam" id="register_name" placeholder="Last Name">

        <label class="register-popup_color" for="email"><b>Email</b></label>
        <input type="text" required name="email" id="register_email" placeholder="Email">

        <label class="register-popup_color" for="username"><b>Username</b></label>
        <input type="text" required name="uid" id="register_name" placeholder="Username">

        <label class="register-popup_color" for="psw"><b>Password</b></label>
        <input type="password" required name="pwd" id="register_password" placeholder="Password">

        <label class="register-popup_color" for="psw"><b>Confirm Password</b></label>
        <input type="password" required name="pwdrepeat" id="register_password" placeholder="Repeat Password">
      </div>


      <button type="submit" name="submit" class="btn popup-button">Register</button>
      <button type="button" class="btn cancel popup-button" onclick="closePopupRegister()">Close</button>
    </form>

  </div>
</body>

<script>
  function openPopupRegister() {
    document.getElementById("register_myForm").style.display = "block";
    document.getElementById("overlay").style.display = "block";
    disableButtons();
  }

  function closePopupRegister() {
    document.getElementById("register_myForm").style.display = "none";
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

  document.getElementById("register-open-button").addEventListener("click", openPopupRegister);
  document.querySelector(".cancel").addEventListener("click", closePopupRegister);

</script>

</html>