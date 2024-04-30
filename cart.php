<?php
session_start();

if (isset($_POST["logout"])) {
    session_destroy();
    header("Location:frontpage.php");
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
                            <a class="nav-link" href="#">Αγαπημένα</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Καλάθι</a>
                        </li>
                    </ul>
                    <form class="d-flex me-lg-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Ψάχνω για..." aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Αναζήτηση</button>
                    </form>
                </div>
            </div>
        </nav>

    </header>

    <div class="containter">

    </div>




    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>