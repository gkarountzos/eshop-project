<?php
session_start();


if (isset($_POST["login"])) {
  include 'connect.php';

  // retrieves email and password from the post request
  $email = $_POST["email"];
  $pass = $_POST["pass"];


  $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'"; // query to select the user with the provided email and password
  $result = mysqli_query($conn, $sql); // executes the query and stores the result in a variable


  if (!$row = mysqli_fetch_assoc($result)) { // checks if no matching user was found
    echo "<script> alert ('Τα στοιχεία που έδωσες είναι λάθος!')</script>"; // displays an alert indicating incorrect login details
  } else {
    // store users first name and id in session variables
    $_SESSION["fname"] = $row["fname"];
    $_SESSION["id"] = $row["id"];

    // if the cart session variable is not set, initialize it as an empty array
    if (!isset($_SESSION["cart"])) {
      $_SESSION["cart"] = [];
    }

    // redirects the user to the home page
    header("Location: home.php");
    exit();
  }
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
      <div class="container">
        <a class="navbar-brand mx-auto" href="frontpage.php"><img src="images/logo-tg-trans.svg" alt="Tech Gear"></a>
      </div>
    </nav>
  </header>

  <section id="login-form">
    <div class="container mt-5 pt-5">
      <div class="row">
        <div class="col-12 col-sm8 col-md-6 m-auto">
          <div class="card border-0 shadow">
            <div class="card-body">
              <div class="text-center form-logo">
                <img src="images/logo-techgear-trans.svg">
              </div>
              <form action="login.php" method="POST">
                <input type="email" name="email" required id="inputEmail" class="form-control my-4 py-2" placeholder="Email">
                <input type="password" name="pass" id="inputLname" class="form-control my-4 py-2" placeholder="Ο κωδικός σου">
                <div class="but text-center mt-3">
                  <button type="submit" name="login" class="btn btn-primary">Σύνδεση</button>
                  <a href="register.php" class="nav-link">Νέος χρήστης; Κάνε εγγραφή τώρα!</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>