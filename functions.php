<?php
$timeout = 1; // Set timeout menit
$logout_redirect_url = "index.php"; // Set logout URL
 
$timeout = $timeout * 10; // Ubah menit ke detik
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        echo "<script>alert('Waktu Anda Telah Habis Broo!'); window.location = '$logout_redirect_url'</script>";
    }
}
        else {
            Header("Location:dams.php");
        }
?>