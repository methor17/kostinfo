<?php
session_start();
unset($_SESSION['member']);
session_destroy();
echo "<script>alert('Anda telah keluar dari halaman Pelanggan'); window.location = '../index.php'</script>";
?>
