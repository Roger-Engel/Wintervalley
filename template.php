<!DOCTYPE html>
<html>
  <head>
    <title>WinterValley</title>
    <link rel="icon" href="../img/logo.png" type="image/x-icon" />

    <style><?php include '../style.css'; ?></style>
  </head>

  <body>
    <div class="logo">
      <a href="index.php"> <img src="../img/logo.png" alt="logo" /></a>
      <h1>WinterValley</h1>
      <div class="empty"></div>
      <div class="login">
        <input
          onClick="location.href='../page/login.php'"
          type="button"
          name="login"
          value="Login"
          id="login"
        />
      </div>
      <div class="empty2"></div>
      <div class="register">
        <input
          onClick="location.href='../page/register.php'"
          type="button"
          name="register"
          value="Register"
          id="register"
        />
      </div>
      <div class="empty3"></div>
    </div>

    <nav>
      <ul>
        <li><a href="../page/index.php">Home</a></li>
        <li><a href="../page/events.php">Events</a></li>
        <li><a href="../page/tickets.php">Tickets</a></li>
        <li><a href="../page/merchanside.php">Merchandise</a></li>
        <li><a href="../page/music.php">Music</a></li>
        <li><a href="../page/artists.php">Artists</a></li>
        <li><a href="../page/house_rules.php">House Rules</a></li>
      </ul>
    </nav>

    <h1>-Inhoud van de pagina-</h1>

    <footer>
      <div class="update">
        <h1>Stay up to date!</h1>
        <p>
          Stay up to date. Subscribe to our Newsletter<br>
          to be notified about WinterValley events in the future.<br>
          Leave your Email address here to receive the latest info<br>
          of WinterValley and one of the first to get a hold<br> of the tickets
          for upcomming events.
        </br>
        <div class="footerimage">
          <ul>
            <li>
              <a href="mailto:wintervalley.help@gmail.com">
                <img
                  src="../img/gmail.png"
                  alt="gmail-link"
              /></a>
            </li>
            <li>
              <a href="tel:123-456-7890">
                <img
                  src="../img/telefoon.png"
                  alt="telefoon-link"
              /></a>
            </li>
            <li>
              <a href="https://twitter.com/wintervalley">
                <img
                  src="../img/twitter.png"
                  alt="twitter-link"
              /></a>
            </li>
            <li>
              <a href="https://instagram.com/wintervalley">
                <img
                  src="../img/instagram.png"
                  alt="instagram-link"
              /></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="empty"></div>

      <div class="sub">
        <h1>Subscribe to the Newsletter</h1>
        <label for="h1">Email address:</label><br />
        <input type="text" class="backgroundcolor" /> <br />

        <label for="h1">Name:</label><br />
        <input type="text" class="backgroundcolor" /> <br />

        <input
          type="button"
          name="subscribe"
          value="Subscribe"
          id="subscrbe"
          onClick="location.href='../page/x.php'"
        />
      </div>
    </footer>
    <div class="reserved"><h1>WinterValley 2022, All Rights Reserved</h1></div>
  </body>
</html>

