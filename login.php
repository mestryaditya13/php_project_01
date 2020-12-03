<?php include_once 'header.php' ?>

  <div class="jumbotron">
    <center>
        <h2>Log In</h2>
        <form action="includes/login.inc.php" method="post">
          <label for="1">Enter Name:</label>
          <input type="text" name="uid" id="1" placeholder="Enter Username/Email..."><br>
          <label for="4">Enter Password:</label>
          <input type="password" name="pwd" id="4" placeholder="Enter password..."><br>
          <button type="submit" name="submit">Log In</button>
        </form>

        <?php
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
              echo "<p>Fill in all the fields!</p>";
            }
            elseif ($_GET["error"] == "wronglogin") {
              echo "<p>Incorrect login Information!</p>";
            }
          }
         ?>
    </center>
  </div>

<?php include_once 'footer.php' ?>
