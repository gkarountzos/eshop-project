<?php
session_start();

if (isset($_POST["logout"])) {
  session_destroy();
  header("Location:frontpage.php");
}

?>
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
        <a class="navbar-brand mx-auto" href="home.php"><img src="images/logo-tg-trans.svg" alt="Tech Gear"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                ΠΡΟΪΟΝΤΑ
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Τηλεφωνία</a></li>
                <li><a class="dropdown-item" href="#">Ήχος</a></li>
                <li><a class="dropdown-item" href="#">Τηλεοράσεις</a></li>
                <li><a class="dropdown-item" href="#">Υπολογιστές</a></li>
                <li><a class="dropdown-item" href="#">Αναβάθμιση & Δικτυακά</a></li>
                <li><a class="dropdown-item" href="#">Smart Tech & Gadgets</a></li>
                <li><a class="dropdown-item" href="#">Ηλεκτροκίνηση</a></li>
              </ul>
            </li>
          </ul>
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Λογαριασμός
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="user_update.php">Ενημέρωση λογαριασμόυ</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="register.php">Αποσύνδεση</a>
              </div>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Αγαπημένα</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Εξέλιξη Παραγγελίας</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Καλάθι</a>
            </li>
          </ul>
          <form class="d-flex me-auto me-lg-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Ψάχνω για..." aria-label="Search">
            <button class="btn btn-outline-dark" type="submit">Αναζήτηση</button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <section id="update-form">
    <div class="container mt-5 pt-5">
      <div class="row">
        <div class="col-12 col-sm8 col-md-6 m-auto">
          <div class="card border-0 shadow">
            <div class="card-body">
              <div class="text-center">
                <img src="images/logo-techgear-trans.svg">
              </div>
              <form action="register.php" method="POST">
                <input type="text" name="fname" required id="inputFname1" class="form-control my-4 py-2" placeholder="Όνομα *">
                <input type="text" name="lname" required id="inputLname1" class="form-control my-4 py-2" placeholder="Επίθετο *">
                <input type="email" name="email" required id="inputEmail" class="form-control my-4 py-2" placeholder="Email *">
                <input type="password" name="old-pass" required id="inputPassword" class="form-control my-4 py-2" placeholder="Παλιός κωδικός *">
                <input type="password" name="new-pass" required id="inputAddress" class="form-control my-4 py-2" placeholder="Νέος κωδικός *">
                <input type="password" name="confirm-new-pass" required id="inputPhone" class="form-control my-4 py-2" placeholder="Επιβεβαίωση νέου κωδικού *">
                <div class="text-center mt-3">
                  <button type="submit" name="register" class="btn btn-success">Αλλαγή στοιχείων</button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body