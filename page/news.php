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

  <?php

  $serverName = "localhost";
  $dbname = "s169849_wintervalley";
  $dBUsername = "s169849_wintervalley";
  $dBPassword = "Roger123";
  $charset = 'utf8mb4';

  $dsn = "mysql:host=$serverName;dbname=$dBName;charset=$charset";

  try {
    $pdo = new PDO($dsn, $dBUsername, $dBPassword);
  } catch (\PDOException $e) {
    echo 'error connecting to database 😦 on line : ' . $e->getMessage();
  }


  $stmt = $pdo->prepare('SELECT * FROM news');
  $stmt->execute();

  $nieuws1_array = $stmt->fetchAll(PDO::FETCH_OBJ);

  function echoSeries()
  {
    global $nieuws1_array;
    foreach ($nieuws1_array as $key) {
      echo "<a class='news_kopje_2' href='nieuws-paginas.php?id=$key->id'><img src='../img/news/wintervalley-news-1.png' alt='News Img' /></a>";
    }
  }

  ?>



  <!-- main content -->



  <div class="news_head">
    <a href="../page/tickets.php">
      <img src="../img/news/wintervalley-news.png" alt="news_head"></a>
  </div>
  <!-- news kopjes -->
  <div class="news_kopje_2">
    <div class="news_img">
      <?php echoSeries($stmt); ?>
    </div>
    <div class="news_img">
      <?php echo "<a class='news_kopje_2' href='nieuws-paginas.php?id=2'><img src='../img/news/wintervalley-news-2.png' alt='News Img' /></a>";
      echoSeries($stmt); ?>
    </div>
  </div>

  <div class="news_kopje_2">
    <div class="news_img">
      <a href="../page/merchandise.php">
        <img src="../img/news/wintervalley-news-3.png" alt="news_img"></a>
    </div>
    <div class="news_img">
      <?php echo "<a class='news_kopje_2' href='nieuws-paginas.php?id=3'><img src='../img/news/wintervalley-news-4.png' alt='News Img' /></a>";
      echoSeries($stmt); ?>
    </div>
  </div>

  <div class="news_kopje_2">
    <div class="news_img">
      <a href="../page/artists.php">
        <img src="../img/news/wintervalley-news-5.png" alt="news_img"></a>
    </div>
    <div class="news_img">
      <?php echo "<a class='news_kopje_2' href='nieuws-paginas.php?id=4'><img src='../img/news/wintervalley-news-6.png' alt='News Img' /></a>";
      echoSeries($stmt); ?>
    </div>
  </div>

  <div class="news_kopje_2">
    <div class="news_img">
      <?php echo "<a class='news_kopje_2' href='nieuws-paginas.php?id=5'><img src='../img/news/wintervalley-news-7.png' alt='News Img' /></a>";
      echoSeries($stmt); ?>
    </div>
    <div class="news_img">
      <?php echo "<a class='news_kopje_2' href='nieuws-paginas.php?id=6'><img src='../img/news/wintervalley-news-8.png' alt='News Img' /></a>";
      echoSeries($stmt); ?>
    </div>
  </div>

  <div class="news_kopje_2">
    <div class="news_img">
      <a href="../page/tickets.php">
        <img src="../img/news/wintervalley-news-9.png" alt="news_img"></a>
    </div>
    <div class="news_img">
      <?php echo "<a class='news_kopje_2' href='nieuws-paginas.php?id=7'><img src='../img/news/wintervalley-news-10.png' alt='News Img' /></a>";
      echoSeries($stmt); ?>
    </div>
  </div>

  <div class="news_kopje_2">
    <div class="news_img">
      <?php echo "<a class='news_kopje_2' href='nieuws-paginas.php?id=8'><img src='../img/news/wintervalley-news-11.png' alt='News Img' /></a>";
      echoSeries($stmt); ?>
    </div>
    <div class="news_img">
      <?php echo "<a class='news_kopje_2' href='nieuws-paginas.php?id=9'><img src='../img/news/wintervalley-news-12.png' alt='News Img' /></a>";
      echoSeries($stmt); ?>
    </div>
  </div>

  <div class="news_kopje_2">
    <div class="news_img">
      <a href="../page/tickets.php">
        <img src="../img/news/wintervalley-news-13.png" alt="news_img"></a>
    </div>
    <div class="news_img">
      <a href="../page/artists.php">
        <img src="../img/news/wintervalley-news-14.png" alt="news_img"></a>
    </div>
  </div>

  <div class="news_kopje_2">
    <div class="news_img">
      <?php echo "<a class='news_kopje_2' href='nieuws-paginas.php?id=10'><img src='../img/news/wintervalley-news-15.png' alt='News Img' /></a>";
      echoSeries($stmt); ?>
    </div>
    <div class="news_img">
      <a href="../page/tickets.php">
        <img src="../img/news/wintervalley-news-16.png" alt="news_img"></a>
    </div>
  </div>

  <div class="news_kopje_2">
    <div class="news_img">
      <?php echo "<a class='news_kopje_2' href='nieuws-paginas.php?id=11'><img src='../img/news/wintervalley-news-17.png' alt='News Img' /></a>";
      echoSeries($stmt); ?>
    </div>
    <div class="news_img">
      <?php echo "<a class='news_kopje_2' href='nieuws-paginas.php?id=12'><img src='../img/news/wintervalley-news-18.png' alt='News Img' /></a>";
      echoSeries($stmt); ?>
    </div>
  </div>

  <?php include "../include/footer.php" ?>
</body>

</html>