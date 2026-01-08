
<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
        <p>Anda berada di halaman Admin Panel.</p>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>
</html>
