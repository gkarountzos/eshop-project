<?php

session_start(); // starts the session to manage session variables


if (isset($_POST["logout"])) { // checks if the form logout was submitted
  session_destroy(); // destroys the current session
  header("Location: frontpage.php"); // redirects the user to the frontpage
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/logo-tg-trans.svg">
  <title>Tech Gear - Gear up for the Future!</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.php"><img src="images/logo-tg-trans.svg" alt="tg-mini-logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item fs-2">TechGear</li>
          </ul>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Λογαριασμός
              </a>
              <div class="dropdown-menu">
                <p class="dropdown-item">
                  <?php echo "Γεια σου " . $_SESSION["fname"]; ?>
                </p>
                <div class="dropdown-divider"></div>
                <form action="home.php" method="POST">
                  <a class="dropdown-item" href="user_update.php">Ενημέρωση λογαριασμού</a>
                  <div class="text-center mt-3">
                    <button type="submit" name="logout" class="btn btn-danger">Αποσύνδεση</button>
                  </div>
                </form>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Καλάθι</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </header>

  <div class="containter">
    <div class="row menu text-center">
      <form action="home.php" method="POST">
        <button type="submit" name="smartphones"><img src="images\icon-phone.png"><br>
          <p></p>
        </button>
        <button type="submit" name="computers"><img src="images\icon-laptop.png"><br>
          <p></p>
        </button>
        <button type="submit" name="sound"><img src="images\icon-speaker.png"><br>
          <p></p>
        </button>
        <button type="submit" name="tv"><img src="images\icon-tv.png"><br>
          <p></p>
        </button>
        <button type="submit" name="gadgets"><img src="images\icon-watch.png"><br>
          <p></p>
        </button>
      </form>
    </div>
    <div class="container">

      <div class="row row-cols 1 row-cols-md-3 g-4">

        <?php
        //smartphone category
        if (isset($_POST["smartphones"])) { // checks if the form smartphones was submitted
          include "connect.php"; // includes the file containing connection with the db

          $sql = "SELECT * FROM products WHERE category='smartphones'";
          $result = mysqli_query($conn, $sql); //query to retrieve the items from the db 


          while ($row = mysqli_fetch_assoc($result)) { // loops through each row in the result set
            // html to display each product in a card layout
            echo "<div class='col'>";
            echo "<div class='card'>";
            echo "<div class='text-center'>";
            echo "<img src='images/" . $row["pimage"] . "' class='card-img-top'>"; // displays the product image
            echo "</div>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . $row["pname"] . "</h5>"; // displays the product name
            echo "<p class='card-text'>" . $row["pdescription"] . "</p>"; // displays the product description
            echo "<p class='card-text'>Τιμή: " . $row["pprice"] . "€</p>"; // display the product price

            echo "<form action='cart.php' method='POST'>"; // form to add the product to the cart
            // hidden input fields to pass the product name and price
            echo "<input type='hidden' name='pname' value='" . $row["pname"] . "'>";
            echo "<input type='hidden' name='pprice' value='" . $row["pprice"] . "'>";
            echo "<button type='submit' name='add_to_cart' class='btn btn-primary'>Προσθήκη στο καλάθι</button>"; // button to submit the form and add the product to the cart
            echo "</form>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
          } //same goes for the other categories.
        } else if (isset($_POST["computers"])) {
          include "connect.php";

          $sql = "SELECT * FROM products WHERE category='computers'";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='col'>";
            echo "<div class='card'>";
            echo "<div class='text-center'>";
            echo "<img src='images/" . $row["pimage"] . "' class='card-img-top' > ";
            echo "</div>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . $row["pname"] . "</h5>";
            echo "<p class='card-text'>" . $row["pdescription"] . "</p>";
            echo "<p class='card-text'>Τιμή: " . $row["pprice"] . "€</p>";
            echo "<form action='cart.php' method='POST'>";
            echo "<input type='hidden' name='pname' value='" . $row["pname"] . "'>";
            echo "<input type='hidden' name='pprice' value='" . $row["pprice"] . "'>";
            echo "<button type='submit' name='add_to_cart' class='btn btn-primary'>Προσθήκη στο καλάθι</button>";
            echo "</form>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
          }
          //sound category
        } else if (isset($_POST["sound"])) {
          include "connect.php";

          $sql = "SELECT * FROM products WHERE category='sound'";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='col'>";
            echo "<div class='card'>";
            echo "<div class='text-center'>";
            echo "<img src='images/" . $row["pimage"] . "' class='card-img-top' > ";
            echo "</div>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . $row["pname"] . "</h5>";
            echo "<p class='card-text'>" . $row["pdescription"] . "</p>";
            echo "<p class='card-text'>Τιμή: " . $row["pprice"] . "€</p>";
            echo "<form action='cart.php' method='POST'>";
            echo "<input type='hidden' name='pname' value='" . $row["pname"] . "'>";
            echo "<input type='hidden' name='pprice' value='" . $row["pprice"] . "'>";
            echo "<button type='submit' name='add_to_cart' class='btn btn-primary'>Προσθήκη στο καλάθι</button>";
            echo "</form>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
          }
          //tv category
        } else if (isset($_POST["tv"])) {
          include "connect.php";

          $sql = "SELECT * FROM products WHERE category='tv'";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='col'>";
            echo "<div class='card'>";
            echo "<div class='text-center'>";
            echo "<img src='images/" . $row["pimage"] . "' class='card-img-top' > ";
            echo "</div>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . $row["pname"] . "</h5>";
            echo "<p class='card-text'>" . $row["pdescription"] . "</p>";
            echo "<p class='card-text'>Τιμή: " . $row["pprice"] . "€</p>";
            echo "<form action='cart.php' method='POST'>";
            echo "<input type='hidden' name='pname' value='" . $row["pname"] . "'>";
            echo "<input type='hidden' name='pprice' value='" . $row["pprice"] . "'>";
            echo "<button type='submit' name='add_to_cart' class='btn btn-primary'>Προσθήκη στο καλάθι</button>";
            echo "</form>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
          }
          //gadgets category
        } else if (isset($_POST["gadgets"])) {
          include "connect.php";

          $sql = "SELECT * FROM products WHERE category='gadgets'";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='col'>";
            echo "<div class='card'>";
            echo "<div class='text-center'>";
            echo "<img src='images/" . $row["pimage"] . "' class='card-img-top' > ";
            echo "</div>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . $row["pname"] . "</h5>";
            echo "<p class='card-text'>" . $row["pdescription"] . "</p>";
            echo "<p class='card-text'>Τιμή: " . $row["pprice"] . "€</p>";
            echo "<form action='cart.php' method='POST'>";
            echo "<input type='hidden' name='pname' value='" . $row["pname"] . "'>";
            echo "<input type='hidden' name='pprice' value='" . $row["pprice"] . "'>";
            echo "<button type='submit' name='add_to_cart' class='btn btn-primary'>Προσθήκη στο καλάθι</button>";
            echo "</form>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
          }
        }

        ?>
      </div>
    </div>
  </div>



  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>