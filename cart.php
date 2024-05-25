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
                            <a class="nav-link" href="cart.php">Καλάθι</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <div class="containter">

        <div class="text-center">
            <h1>Το καλάθι σου</h1>
        </div>

        <?php

        $sum = 0; // initializes sum variable to store the total price

        if (isset($_POST["add_to_cart"])) { // checks if the form add_to_cart was submitted
            // retrieves product name and price from the post request
            $pname = $_POST["pname"];
            $pprice = $_POST["pprice"];
            $item = ["pname" => $pname, "pprice" => $pprice]; // creates an associative array with product name and price
            $_SESSION["cart"][] = $item; // adds the item to the session cart array
        }

        if (isset($_POST["cart_reset"])) { // checks if the form cart_reset was submitted
            $_SESSION["cart"] = []; // resets the session cart to an empty array
        }

        if (isset($_POST["order"])) { // checks if the form order was submitted
            echo "<script> alert ('Η παραγγελία σου ολοκληρώθηκε!')</script>"; // displays a JavaScript alert that the order is compelted
        }
        // html for the cart table
        echo "<div class='text-center'>";
        echo "<table class='table'> <thead class='thead-dark'>";
        echo "<tr> <th> Προϊόν </th> <th> Τιμή </th> </tr> </thead>";
        foreach ($_SESSION["cart"] as $row) { // loops through each item in the session cart
            echo "<tr> <td>" . $row['pname'] . " </td> <td> " . $row['pprice'] . "€ </td></tr>"; // displays each name and price in the row of products
            $sum += floatval($row["pprice"]); // adds the price to the total sum while converting it to float for safety reasons
        }

        // displays the total sum row in the table
        echo "<tr> <th> <colspan='1'> </th> <th> Σύνολο </th> </tr> </thead>";
        echo "<tr> <td> </td> <td> " . $sum . "€ </td></tr>";
        echo "</table>";

        // reset cart button form
        echo "<form action='cart.php' method='POST'>";
        echo "<button type='submit' name='cart_reset' class='btn btn-danger'>";
        echo "Άδειασμα Καλαθιού";
        echo "</button>";
        echo "</form>";
        echo "<br>";

        // complete order button form
        echo "<form action='cart.php' method='POST'>";
        echo "<button type='submit' name='order' class='btn btn-success'>";
        echo "Ολοκλήρωση Παραγγελίας";
        echo "</button>";
        echo "</form>";

        echo "</div>";

        ?>

    </div>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>