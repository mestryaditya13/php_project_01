<?php include_once 'header.php' ?>

  <div class="jumbotron">
    <?php
      if (isset($_SESSION["useruid"])) {
        echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
      }
     ?>
    <h1>Bootstrap Tutorial</h1>
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
    responsive, mobile-first projects on the web.</p>
  </div>

<?php include_once 'footer.php' ?>
