<?php
session_start();

$page = $_GET['page'] ?? 'C'; 
$role = $_SESSION['username'] ?? 'guest';

if ($page === 'A' && $role !== 'admin') {
    echo "Akses ditolak ke Halaman A!";
    exit;
}

if ($page === 'B' && !in_array($role, ['admin', 'member'])) {
    echo "Akses ditolak ke Halaman B!";
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman <?php echo $page; ?></title>
</head>
<body>

<?php
switch ($page) {
    case 'A':
        echo "<h1>Hai ADMIN!</h1>";
        echo "<h2>INI LAMAN A</h2>";
        break;

    case 'B':
        echo "<h1>SELAMAT DATANG DI LAMAN B</h1>";
        echo "<h2>HANYA ADMIN ATAU MEMBER</h2>";
        break;

    case 'C':
    default:
        echo "<h1>SELAMAT DATANG DI LAMAN C</h1>";
        echo "<h2>SEMUA BISA AKSES</h2>";
        break;
}
?>

<br><br>
<a href="dashboard.php">
    <button>Kembali</button>
</a>

</body>
</html>