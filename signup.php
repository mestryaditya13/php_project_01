<?php include_once 'header.php' ?>

  <div class="jumbotron">
    <center>
        <h2>Sign Up</h2>
        <form action="includes/signup.inc.php" method="post">
          <label for="1">Enter Name:</label>
          <input type="text" name="name" id="1" placeholder="Enter name..."><br>
          <label for="2">Enter Email:</label>
          <input type="text" name="email" id="2" placeholder="Enter email..."><br>
          <label for="3">Enter Username:</label>
          <input type="text" name="uid" id="3" placeholder="Enter username..."><br>
          <label for="4">Enter Password:</label>
          <input type="password" name="pwd" id="4" placeholder="Enter password..."><br>
          <label for="5">Repeat-Password:</label>
          <input type="password" name="pwdrepeat" id="5" placeholder="Repeat Password..."><br>
          <button type="submit" name="submit">Sign Up</button>
        </form>

        <?php
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
              echo "<p>Fill in all the fields!</p>";
            }
            elseif ($_GET["error"] == "invaliduid") {
              echo "<p>Choose a proper username!</p>";
            }
            elseif ($_GET["error"] == "invalidemail") {
              echo "<p>Choose a proper email!</p>";
            }
            elseif ($_GET["error"] == "passwordsdontmatch") {
              echo "<p>Passwords don't match!</p>";
            }
            elseif ($_GET["error"] == "stmtfailed") {
              echo "<p>Something went wrong, try again!</p>";
            }
            elseif ($_GET["error"] == "usernametaken") {
              echo "<p>Username already taken!</p>";
            }
            elseif ($_GET["error"] == "none") {
              echo "<p>You have signed up!</p>";
            }
          }
         ?>
    </center>
  </div>



<?php include_once 'footer.php' ?>
