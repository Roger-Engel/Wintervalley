<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>WinterValley | Artists</title>
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
  $stmt = $pdo->prepare("SELECT * FROM `artists`");
  $stmt->execute();
  $artists = $stmt->fetchAll();

  ?>



  <!-- artiesten -->
  <div class="artiestenbox">
    <div class="artiesten_afstand">
      <div class="header_ha">
        <h1 class="artiest_lettertype">
          <?php foreach ($artists as $art) {
            echo $art['titel_event_1'];
          } ?></h1>
      </div>

      <div onClick="location.href='https://en.wikipedia.org/wiki/The_Neighbourhood'" class="artiest_neighbourhood">
        <div class="artiest_text">
          <h2 class="artiest_lettertype">
            <?php foreach ($artists as $art) {
              echo $art['artiest_1_event_1'];
            } ?> </h2>
          <ul>
            <li>
              <?php foreach ($artists as $art) {
                echo $art['artiest_1_event_1_namen_artiesten'];
              } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_1_event_1_speeltijd'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_1_event_1_datum'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_1_event_1_genre'];
                } ?></li>
          </ul>
        </div>
      </div>


      <div onClick="location.href='https://en.wikipedia.org/wiki/Taylor_Swift'" class="artiest_taylor_swift">
        <div class="artiest_text">
          <h2 class="artiest_lettertype">
            <?php foreach ($artists as $art) {
              echo $art['artiest_2_event_1'];
            } ?>
          </h2>
          <ul>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_2_event_1_speeltijd'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_2_event_1_datum'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_2_event_1_genre'];
                } ?></li>
          </ul>
        </div>
      </div>

      <div onClick="location.href='https://en.wikipedia.org/wiki/Ariana_Grande'" class="artiest_ariana_grande">
        <div class="artiest_text">
          <h2 class="artiest_lettertype">
            <?php foreach ($artists as $art) {
              echo $art['artiest_3_event_1'];
            } ?>
          </h2>
          <ul>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_3_event_1_speeltijd'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_3_event_1_datum'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_3_event_1_genre'];
                } ?></li>
          </ul>
        </div>
      </div>

      <div onClick="location.href='https://en.wikipedia.org/wiki/Robbie_Williams'" class="artiest_robbie_williams">
        <div class="artiest_text">
          <h2 class="artiest_lettertype">
            <?php foreach ($artists as $art) {
              echo $art['artiest_4_event_1'];
            } ?>
          </h2>
          <ul>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_4_event_1_speeltijd'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_4_event_1_datum'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_4_event_1_genre'];
                } ?></li>
          </ul>
        </div>
      </div>


      <div class="header_ha">
        <h1 class="artiest_lettertype">
          <?php foreach ($artists as $art) {
            echo $art['titel_event_2'];
          } ?>
        </h1>
      </div>

      <div onClick="location.href='https://en.wikipedia.org/wiki/Sarah_Brightman'" class="artiest_sarah_brightman">
        <div class="artiest_text">
          <h2 class="artiest_lettertype">
            <?php foreach ($artists as $art) {
              echo $art['artiest_1_event_2'];
            } ?>
          </h2>
          <ul>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_1_event_2_speeltijd'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_1_event_2_datum'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_1_event_2_genre'];
                } ?></li>
          </ul>
        </div>
      </div>

      <div onClick="location.href='https://en.wikipedia.org/wiki/Ed_Sheeran'" class="artiest_ed_sheeran">
        <div class="artiest_text">
          <h2 class="artiest_lettertype">
            <?php foreach ($artists as $art) {
              echo $art['artiest_2_event_2'];
            } ?>
          </h2>
          <ul>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_2_event_2_speeltijd'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_2_event_2_datum'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_2_event_2_genre'];
                } ?></li>
          </ul>
        </div>
      </div>

      <div onClick="location.href='https://en.wikipedia.org/wiki/Kate_Bush'" class="artiest_kate_bush">
        <div class="artiest_text">
          <h2 class="artiest_lettertype">
            <?php foreach ($artists as $art) {
              echo $art['artiest_3_event_2'];
            } ?>
          </h2>
          <ul>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_3_event_2_speeltijd'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_3_event_2_datum'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_3_event_2_genre'];
                } ?></li>
          </ul>
        </div>
      </div>

      <div onClick="location.href='https://en.wikipedia.org/wiki/Linkin_Park'" class="artiest_linkin_park">
        <div class="artiest_text">
          <h2 class="artiest_lettertype">
            <?php foreach ($artists as $art) {
              echo $art['artiest_4_event_2'];
            } ?>
          </h2>
          <ul>
            <li>
              <?php foreach ($artists as $art) {
                echo $art['artiest_4_event_2_namen_artiesten'];
              } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_4_event_2_speeltijd'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_4_event_2_datum'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_4_event_2_genre'];
                } ?></li>
          </ul>
        </div>
      </div>

      <div class="header_ha">
        <h1 class="artiest_lettertype">
          <?php foreach ($artists as $art) {
            echo $art['titel_event_3'];
          } ?>
        </h1>
      </div>
      <div onClick="location.href='https://en.wikipedia.org/wiki/Mariah_Carey'" class="artiest_mariah">
        <div class="artiest_text">
          <h2 class="artiest_lettertype">
            <?php foreach ($artists as $art) {
              echo $art['artiest_1_event_3'];
            } ?>
          </h2>
          <ul>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_1_event_3_speeltijd'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_1_event_3_datum'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_1_event_3_genre'];
                } ?></li>
          </ul>
        </div>


      </div>


      <div onClick="location.href='https://en.wikipedia.org/wiki/Imagine_Dragons'" class="artiest_imagine_dragons">
        <div class="artiest_text">
          <h2 class="artiest_lettertype">
            <?php foreach ($artists as $art) {
              echo $art['artiest_2_event_3'];
            } ?>
          </h2>
          <ul>
            <li>
              <?php foreach ($artists as $art) {
                echo $art['artiest_2_event_3_namen_artiesten'];
              } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_2_event_3_speeltijd'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_2_event_3_datum'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_2_event_3_genre'];
                } ?></li>
          </ul>
        </div>


      </div>


      <div onClick="location.href='https://en.wikipedia.org/wiki/Michael_Bubl%C3%A9'" class="artiest_michael">
        <div class="artiest_text">
          <h2 class="artiest_lettertype">
            <?php foreach ($artists as $art) {
              echo $art['artiest_3_event_3'];
            } ?>
          </h2>
          <ul>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_3_event_3_speeltijd'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_3_event_3_datum'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_3_event_3_genre'];
                } ?></li>
          </ul>
        </div>


      </div>

      <div onClick="location.href='https://en.wikipedia.org/wiki/Aurora_(singer)'" class="artiest_aurora">
        <div class="artiest_text">
          <h2 class="artiest_lettertype">
            <?php foreach ($artists as $art) {
              echo $art['artiest_4_event_3'];
            } ?>
          </h2>
          <ul>
            <li>
              <?php foreach ($artists as $art) {
                echo $art['artiest_4_event_3_namen_artiesten'];
              } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_4_event_3_speeltijd'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_4_event_3_datum'];
                } ?></li>
            <li><?php foreach ($artists as $art) {
                  echo $art['artiest_4_event_3_genre'];
                } ?></li>
          </ul>
        </div>
      </div>



      <div class="header_ha">
        <h2 class="artiest_informatie">For more information</h2>
      </div>
      <div class="header_ha">
        <input type="moreinfo" name="moreinfo" value="More Info" id="moreinfo" onClick="location.href='../page/events.php'" />
      </div>


    </div>
  </div>
  </div>
  <?php include "../include/footer.php" ?>
</body>

</html>