<?php
session_start();

if (isset($_POST["register"])) {
  include "connect.php";

  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
  $pass = $_POST["pass"];
  $address = $_POST["address"];
  $phone = $_POST["phone"];

  $sql_register = "INSERT INTO users(fname,lname,email,password,address,phone)
                      VALUES('$fname','$lname','$email','$pass','$address','$phone');";

  if (mysqli_query($conn, $sql_register)) {
    header("Location: login.php");
    exit;
  } else {
    echo "Η εγγραφή απέτυχε.";
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
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand mx-auto" href="frontpage.php"><img src="images/logo-tg-trans.svg" alt="Tech Gear"></a>
    </div>
  </nav>

  <section id="register-form">
    <div class="container mt-5 pt-5">
      <div class="row">
        <div class="col-12 col-sm8 col-md-6 m-auto">
          <div class="card border-0 shadow">
            <div class="card-body">
              <div class="text-center form-logo">
                <img src="images/logo-techgear-trans.svg">
              </div>
              <form action="register.php" method="POST">
                <input type="text" name="fname" required id="inputFname1" class="form-control my-4 py-2" placeholder="Όνομα *">
                <input type="text" name="lname" required id="inputLname1" class="form-control my-4 py-2" placeholder="Επίθετο *">
                <input type="email" name="email" required id="inputEmail" class="form-control my-4 py-2" placeholder="Email *">
                <input type="password" name="pass" required id="inputPassword" class="form-control my-4 py-2" placeholder="Κωδικός *">
                <input type="text" name="address" required id="inputAddress" class="form-control my-4 py-2" placeholder="Διεύθυνση *">
                <input type="text" name="phone" required id="inputPhone" class="form-control my-4 py-2" placeholder="Τηλ. Επικοινωνίας *">
                <div class="text-center mt-3 but">
                  <button type="submit" name="register" value="Submit" class="btn ">Εγγραφή</button>
                  <a href="login.php" class="nav-link">Έχεις ήδη λογαριασμό; Συνδέσου τωρα!</a>
                </div>
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