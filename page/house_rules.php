<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>WinterValley | House Rules</title>
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



  <!-- the rules -->

  <?php

  try {
    // PDO Connection
    $serverName = "localhost";
    $dbname = "s169849_wintervalley";
    $dBUsername = "s169849_wintervalley";
    $dBPassword = "Roger123";
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$serverName;dbname=$dbname;charset=$charset";
    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $pdo = new PDO($dsn, $dBUsername, $dBPassword, $options);
  } catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
  }

  // Table connection
  $stmt = $pdo->prepare("SELECT * FROM `house_rules`");
  $stmt->execute();
  $house_rules = $stmt->fetchAll();

  ?>

  <div class="house_rules">
    <div class="house_rulestext">
      <div class="header_ha">
        <h1>House Rules Wintervalley</h1>
      </div>
      <button class="collapsible">Tickets</button>
      <div class="houserules_content">
        <p> <?php foreach ($house_rules as $house_rl) {
              echo $house_rl['tickets_info'];
            } ?></p>
      </div>

      <button class="collapsible">Forbidden</button>
      <div class="houserules_content">
        <p><?php foreach ($house_rules as $house_rl) {
              echo $house_rl['forbidden_info'];
            } ?></p>
      </div>

      <button class="collapsible">Lockers</button>
      <div class="houserules_content">
        <p><?php foreach ($house_rules as $house_rl) {
              echo $house_rl['lockers_info'];
            } ?></p>
      </div>

      <button class="collapsible">Own Risk</button>
      <div class="houserules_content">
        <p><?php foreach ($house_rules as $house_rl) {
              echo $house_rl['own_risk_info'];
            } ?></p>
      </div>

      <button class="collapsible">Minimum Age & Legitimation</button>
      <div class="houserules_content">
        <p><?php foreach ($house_rules as $house_rl) {
              echo $house_rl['minimum_age_legitimation_info'];
            } ?></p>
      </div>

      <button class="collapsible">Promotion, selling & trading</button>
      <div class="houserules_content">
        <p><?php foreach ($house_rules as $house_rl) {
              echo $house_rl['promotion_selling_trading_info'];
            } ?></p>
      </div>

      <button class="collapsible">Toilets</button>
      <div class="houserules_content">
        <p><?php foreach ($house_rules as $house_rl) {
              echo $house_rl['toilets_info'];
            } ?></p>
      </div>

      <button class="collapsible">Smoking</button>
      <div class="houserules_content">
        <p><?php foreach ($house_rules as $house_rl) {
              echo $house_rl['smoking_info'];
            } ?></p>
      </div>

      <button class="collapsible">Deposit recycle system</button>
      <div class="houserules_content">
        <p><?php foreach ($house_rules as $house_rl) {
              echo $house_rl['deposit_recycle_system_info'];
            } ?></p>
      </div>

    </div>

  </div>
  <?php include "../include/footer.php" ?>


  <script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight) {
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        }
      });
    }
  </script>
</body>

</html>