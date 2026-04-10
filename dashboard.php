<?php
session_start();

if (!isset($_SESSION["loggedin"])) {
    header("Location: form.php");
    exit;
}

$role = $_SESSION["username"]; // admin / member / others
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Dashboard</h2>
    <p>Login sebagai: <b> <?php echo $role ?></b></p>
    

   <a href="page.php?page=A">
        <button>Ke Halaman A</button>
    </a>

    <br><br>

    <a href="page.php?page=B">
        <button>Ke Halaman B</button>
    </a>

    <br><br>

    <a href="page.php?page=C">
        <button>Ke Halaman C</button>
    </a>

    <br><br>

    <a href="/logout.php">
        <button>Logout</button>
    </a>

</body>
</html>