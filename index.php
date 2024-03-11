<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bank Sampah Sidebar</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
    <span>
        <i class="fas fa-bars" onclick="toggleSidebar()"></i> 
        BANK SAMPAH
    </span>
</div>

<?php
session_start();

// Check apakah sudah login
if(isset($_SESSION['username'])) {
    include "config.php";

    // Mendapatkan informasi user yang login
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM Admin WHERE username='$username'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
?>

<div class="sidebar" id="sidebar">
    <div class="logged-in-user">
        <img src="icon/user (4).png" alt="User Avatar">
        <div class="admin-info">
            <div class="admin-name"><?php echo $row['username']; ?></div>
        </div>
    </div>
    <ul>
        <li><a href="index.php" class="active"><i class="fas fa-chart-line"></i> Dashboard</a></li>
        <li><a href="#"><i class="fas fa-trash"></i> Data Sampah</a></li>
        <li><a href="#"><i class="fas fa-users"></i> Data Nasabah</a></li>
        <li><a href="#"><i class="fas fa-money-check-alt"></i> Transaksi</a></li>
        <li><a href="#"><i class="fas fa-file-alt"></i> Data Laporan</a></li>
        <li><a href="#"><i class="fas fa-user-cog"></i> Data Admin</a></li>
    </ul>
</div>

<?php } ?>

<div class="content" id="content">


</div>

<script>
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active');
}
</script>

</body>
</html>
